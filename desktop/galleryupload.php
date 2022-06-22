<?php
    require "top.php";
    ?>
<div class="gu-1">
    <form method="post" action="gupload.php?name=<?php echo $_GET['name']; ?>">
        <table>
            <tr>
                <td>
                    제목
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" required id="title" name="title"/>
                </td>
            </tr>
            <tr>
                <td>
                    내용
                </td>
            </tr>
            <tr>
                <td>
                    <textarea required id="contents" name="contents"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    파일 업로드
                </td>
            </tr>
            <tr>
                <td>
                    <input type="file" id="file" name="file">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="올리기" required>
                </td>
            </tr>
        </table>
    </form>
</div>
