<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

/**
 * Description of UploadImageComponent
 *
 * @author sakorn.s
 */
class UploadImageComponent extends Component
{

    public $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
    public $UPLOAD_PATH = WWW_ROOT . 'img/upload/';


    public function upload($file = null, $prefix = '', $subfix = '', $copyText = '', $ispushCopyright = true)
    {

        if (is_null($file)) {
            return null;
        }
        if ($file['name'] === '') {
            return null;
        }
        $uploadfile = $file['tmp_name'];
        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
        if ($prefix != '') {
            $prefix = $prefix . "_";
        }
        $setNewFileName = $prefix . time() . "_" . rand(000000, 999999) . $subfix;

        //only process if the extension is valid
        if (in_array($ext, $this->arr_ext)) {
            //do the actual uploading of the file. First arg is the tmp name, second arg is
            //where we are putting it
            $imageFileName = $setNewFileName . '.' . $ext;
            $path = WWW_ROOT . 'img/upload/' . $imageFileName;

            move_uploaded_file($uploadfile, $path);
            if ($ispushCopyright) {
                $this->putcopyright($path, $imageFileName, $ext, $copyText);
            }

            //prepare the filename for database entry
            $Images = TableRegistry::get('Images');
            $image = $Images->newEntity();
            $image->name = $imageFileName;
            $image->type = $ext;
            $image->path = $path;

            $result = $Images->save($image);
            if ($result) {
                return $result->id;
            } else {
                return null;
            }
        }

        return null;
    }

    private function putcopyright($path = '', $imageFileName = '', $ext = '', $watermarkText = '')
    {
        if ($path == '' || $imageFileName == '' || $ext == '') {
            return;
        }

        $path_copyright = WWW_ROOT . 'copyright/stamp_logo.png';

        switch (strtolower($ext)) {
            case 'gif':
                $myImage = imagecreatefromgif($path);
                break;
            case 'jpg':
            case 'jpeg':
                $myImage = imagecreatefromjpeg($path);
                break;
            case 'png':
                $myImage = imagecreatefrompng($path);
                break;
            default:
                die("Unknown filetype");
        }

        $imgWidth = imagesx($myImage);
        $imgHeight = imagesy($myImage);

        $copyrightmark = imagecreatefrompng($path_copyright);
        $copyrightWidth = imagesx($copyrightmark);
        $copyrightHeight = imagesy($copyrightmark);

        $_resPercent = ($imgWidth > $imgHeight) ? 0.6 : 0.3;
        $_copyrightWidth = $imgWidth - ($imgWidth * $_resPercent);
        $_resizePercent = ($_copyrightWidth / $copyrightWidth) * 80;

        $new_copyrightWidth = intval($copyrightWidth * ($_resizePercent / 100));
        $new_copyrightHeight = intval($copyrightHeight * ($_resizePercent / 100));

        $resizedLogo = imagecreatetruecolor($new_copyrightWidth, $new_copyrightHeight);
        imagealphablending($resizedLogo, false);
        imagesavealpha($resizedLogo, true);
        imagecopyresampled(
            $resizedLogo,
            $copyrightmark,
            0,
            0,
            0,
            0,
            $new_copyrightWidth,
            $new_copyrightHeight,
            $copyrightWidth,
            $copyrightHeight
        );

        $font = WWW_ROOT . 'copyright/Sarabun-Bold.ttf';
        $fontSize = intval($imgWidth * 0.021);
        $bbox = imagettfbbox($fontSize, 0, $font, $watermarkText);
        $textWidth = abs($bbox[2] - $bbox[0]);
        $textHeight = abs($bbox[5] - $bbox[1]);

        $padding = 15;
        $totalWidth = $textWidth + $new_copyrightWidth + ($padding * 4);
        $centerY = intval($imgHeight / 2);
        $totalHeight = max($textHeight, $new_copyrightHeight) + ($padding * 2);

        $dstX = $imgWidth - $totalWidth;
        $dstY = intval(($imgHeight - $totalHeight) / 2);

        // ✅ 1. วาดพื้นหลังโปร่งแสงลงบน myImage โดยตรง
        $bgColor = imagecolorallocatealpha($myImage, 0, 0, 0, 105); // 40% จาง (127 = โปร่งใสเต็ม)
        imagefilledrectangle($myImage, $dstX, $dstY + $padding, $dstX + $totalWidth, $dstY + $totalHeight - $padding, $bgColor);

        // ✅ 2. วางข้อความแบบโปร่งใส
        $textColor = imagecolorallocatealpha($myImage, 255, 255, 255, 70); // ขาวโปร่งใส
        $textX = $dstX + $padding;
        $textY = $dstY + intval(($totalHeight + $textHeight) / 2) - 2;
        imagettftext($myImage, $fontSize, 0, $textX, $textY, $textColor, $font, $watermarkText);

        // ✅ 3. วางโลโก้แบบคมชัด (ไม่จาง)
        $logoX = $textX + $textWidth + $padding + $padding;
        $logoY = $dstY + intval(($totalHeight - $new_copyrightHeight) / 2);
        imagecopy(
            $myImage,
            $resizedLogo,
            $logoX,
            $logoY,
            0,
            0,
            $new_copyrightWidth,
            $new_copyrightHeight
        );

        $outputPath = $this->UPLOAD_PATH . $imageFileName;
        imagejpeg($myImage, $outputPath, 90);

        imagedestroy($myImage);
        imagedestroy($copyrightmark);
        imagedestroy($resizedLogo);
    }







    public function delete($imageId = null)
    {
        $Images = TableRegistry::get('Images');
        $image = $Images->get($imageId);
        $imagesLocation = $image->path;
        $Images->delete($image);
        unlink($imagesLocation);
    }
}
