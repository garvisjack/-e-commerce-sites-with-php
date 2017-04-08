<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/22
 * Time: 15:18
 */
class Imageg{

    public $config = array(
        'zoomdir'=>'../public/uploads/goods-zoom/',//缩放后图片的存储路径
        'newfilename'=>array(),//缩放图片文件名
        'logo'=>'../public/logo/logo.png'
    );

    /**
     * 传参，可重新初始化
     * @param array $arr
     */
    public function __construct($arr=array()){
        if(is_array($arr)){
            foreach ($arr as $key=>$value) {
                if(array_key_exists($key,$this->config)){
                    $this->config[$key] = $value;
                }
            }

        }
    }

    /**
     * @param float $width   缩放
     * @param null $prefix  文件前缀
     */
    public function zoom($width,$srcimg,$prefix=null){
        $arr = getimagesize($srcimg);//获取图片资源
        $src_w = $arr[0];//宽
        $src_h = $arr[1];//高
        $dst_w = $width;//目标宽
        $dst_h = $width*$src_h/$src_w;//目标高
        $dst_image = imagecreatetruecolor($dst_w,$dst_h);//目标资源
        $src_image = $this->getImageResource($srcimg);//原资源
        imagecopyresampled($dst_image,$src_image,0,0,0,0,$dst_w,$dst_h,$src_w,$src_h);
        if(!is_dir($this->config['zoomdir'])){
            mkdir($this->config['zoomdir'],0777,true);
        }
        $newfilename = uniqid($prefix).".png";
        $this->config['newfilename'][] = $newfilename;
        imagepng($dst_image,$this->config['zoomdir'].$newfilename);
    }

    /**
     * 根据图片格式，返回资源
     * @param $file
     * @return resource
     */
    public function getImageResource($file){
        $arr = getimagesize($file);
        switch($arr[2]){
            case 1:
                return imagecreatefromgif($file);
                break;
            case 2:
                return imagecreatefromjpeg($file);
                break;
            case 3:
                return imagecreatefrompng($file);
                break;
            default:
                exit('图片格式只能为gif jpeg png格式');
                break;
        }
    }

    public function waterMark($img,$alpha=60){
        //原资源
        $src_im = imagecreatefrompng($this->config['logo']);
        $arr = getimagesize($this->config['logo']);
        $dst_im = $this->getImageResource($img);
        imagecopymerge($dst_im, $src_im,0, 0, 0, 0,$arr[0], $arr[1],$alpha);//将两张图片合在一起
        imagepng($dst_im,$img);
    }

    public function __call($name,$param){
        exit('no this method');
    }

}