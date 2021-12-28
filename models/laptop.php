<?php
if (!defined('HOST')){
    exit;
}
class Laptop extends Db
{
    // cac phuong thuc
    function all()
    {
        return $this->selectQuery('select * from laptop');
    }

    // function random($n)
    // {
    //     return $this->selectQuery("select * from laptop order by rand() limit 0, $n");
    // }

    function search($kw)
    {
        $s ='select * from laptop where ten like ? ';
        $a =["%$kw%"];
        return $this->selectQuery($s, $a);
    }
    function search2($cats)
    {
        $s ='select * from laptop where laptop.loai like ?';
        $a =["%$cats%"];
        return $this->selectQuery($s, $a);
    }
    function search3($pubs)
    {
        $s ='select * from laptop where thuonghieu like ?';
        $a =["%$pubs%"];
        return $this->selectQuery($s, $a);
    }

    function detail($id)
    {
        $data = $this->selectQuery('select * from laptop where ma like ?', [$id]);
        return $data[0];
    }
    function dsL($id) {
        $s ='select * from laptop where loai like ?';
        $a =["%$id%"];
        return $this->selectQuery($s, $a);
    }
    function dsTH($id) {
        $s ='select * from laptop where thuonghieu like ?';
        $a =["%$id%"];
        return $this->selectQuery($s, $a);
    }

    // function panigation()
    // {

    //     $pageSize = 4;
    //     $startRow = 0;
    //     $pageNum = 1;
    //     if(isset($_GET['pageNum'])  == true) $pageNum = $_GET['pageNum'];
    //     $startRow = ($pageNum -1 )* $pageSize;
    //     return  $this->selectQuery("select * from laptop order by ma limit $startRow,".$pageSize."");
    // }
}