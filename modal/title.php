<h3>新增網站標題圖片</h3>
<hr>
<form action="../api/add_title" mathod="post" enctype="multipart/form-data"></form>
<table>
    <tr>
        <td>標題區圖片:</td>
        <td>
            <input type="file" name="img">
        </td>
    </tr>
    <tr>
        <td>標題區替代文字:</td>
        <td>
            <input type="text" name="text" src="" alt="">
        </td>
    </tr>
</table>
<div>
    <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>