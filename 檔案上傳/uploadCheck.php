<?php
echo "檔案名稱: ".$_FILES["uFile"]["name"]."<br/>";
echo "暫存檔名: ".$_FILES["uFile"]["tmp_name"]."<br/>";
echo "檔案尺寸: ".$_FILES["uFile"]["size"]."<br/>";
echo "檔案種類: ".$_FILES["uFile"]["type"]."<hr/>";

$ext = pathinfo($_FILES["uFile"]["name"], PATHINFO_EXTENSION);
$upName = time().".".$ext;
$upName = "pic/" . $upName; // 使用正確的路徑分隔符號
echo $upName;

if (copy($_FILES["uFile"]["tmp_name"], $upName)) {
   echo "檔案上傳成功<br/>";
   unlink($_FILES["uFile"]["tmp_name"]);
} else {
    echo "檔案上傳失敗<br/>";
}
?>
