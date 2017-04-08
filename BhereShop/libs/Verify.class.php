<?php

/**
 * 封装一个输出随机验证码的类
 */
class Verify {
    public $config = array(
        'width' => 70,
        'height' => 45,
        'size' => 17,
        'startx' => 3,
        'starty' => 35,
        'font' => '../public/font/verdana.ttf'
    );

    /**
     * 初始化，构造函数的传入数组值，可以改变我们的config内容
     * @param $arr
     */
    public function __construct($arr=null)
    {
        if (is_array($arr)) {
            foreach ($arr as $key => $value) {
                if (array_key_exists($key, $this->config)) {
                    $this->config[$key] = $value;
                }
            }
        }
    }


    public function showVc() {
        ob_clean();/* 清空（擦掉）输出缓冲区，不加此行可能无法显示图像*/
        header('content-type:image/png'); //画布正确显示的header头
        //首先创建一个画布，所有的图形操作都是在画布的基础上展示的,定义宽高
        $draw = imagecreate($this->config['width'], $this->config['height']);
        //给画布上色
        imagecolorallocate($draw,255, 255, mt_rand(200, 255));
        //增加一些像素点pixel，干扰识别
        //为随机字体和干扰的点，线进行颜色的设置
        $pixelcolor = imagecolorallocate($draw, mt_rand(0, 80), mt_rand(0, 80), mt_rand(0, 80));
        $linecolor = imagecolorallocate($draw, mt_rand(100, 230), mt_rand(100, 200), mt_rand(100, 200));
        $fontcolor = imagecolorallocate($draw, mt_rand(60, 160), mt_rand(60, 200), mt_rand(60, 170));

        //然后把这些干扰项目画在画布上
        for ($j = 0; $j < 100; $j++) {
            imagesetpixel($draw, mt_rand(0, $this->config['width']), mt_rand(0, $this->config['height']), $pixelcolor);
            if ($j < 4) {
                //画线
                imageline($draw, mt_rand(0, $this->config['width'] / 5), mt_rand(0, $this->config['height']), mt_rand($this->config['width'] / 2, $this->config['width']), mt_rand(0, $this->config['height']), $linecolor);
            }
        }
        imagettftext($draw, $this->config['size'],10, $this->config['startx'], $this->config['starty'],$fontcolor, $this->config['font'], $this->getRandData());
        //输出画布
        imagepng($draw);
}

    /**
     * 返回随机字符
     * @return string
     */
    public function getRandData(){
        $arr1 = range('A','Z');
        $arr2 = range(1,9);
        $arr3 = range('a','z');
        $arr4 = array_merge($arr1,$arr2,$arr3);
        $strData ="";
        for($i=0;$i<4;$i++){
            $index = array_rand($arr4);
            $strData.=$arr4[$index];
        }
        $_SESSION['vc'] = strtolower($strData);
        return $strData;
    }
}
