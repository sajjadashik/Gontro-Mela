<!DOCTYPE html>
<html>
    <head>
        <title>Upload Books</title>
    </head>

    <body>
        <fieldset>
            <legend align="center"><h1>Upload Books</h1></legend>
                <form action="admin_bookupload_code.php" method="post">
                    <table align="center">
                        <tr>
                            <td><span>Book Name:</span> </td>
                            <td><input type="text" value="" placeholder="Book Name" name="bookname"> </td>
                        </tr>

                        <tr>
                            <td><span>Book Author Name:</span> </td>
                            <td><input type="text" value="" placeholder="Book Author Name" name="bookauthorname"> </td>
                        </tr>

                        <tr>
                            <td><span>Book Publisher Name:</span> </td>
                            <td><input type="text" value="" placeholder="Book Publisher Name" name="bookpublishername"> </td>
                        </tr>
                        <tr>
                            <td><span>Book Cover Image:</span> </td>
                            <td><input type="file" value=""  name="bookimage" accept="image/*"> </td>
                        </tr>
                        <tr>
                            <td><span>Book Details:</span></td>
                            <td><textarea placeholder="Book Details" value="" name="bookdetails"></textarea></td>
                        </tr>
                        <tr>
                            <td><span>Book Category:</span> </td>
                            <td><input type="text" value="" placeholder="Book Category Name" name="bookcategoryname"> </td>
                        </tr>
                        <tr>
                            <td><span>Book pdf:</span> </td>
                            <td><input type="file" value=""  name="bookpdf" > </td>
                        </tr>
                        <tr>
                            <td><span>Book Page No:</span> </td>
                            <td><input type="number" value="" placeholder="Book page no" name="bookpageno"> </td>
                        </tr>
                        <tr>
                            <td><span>Book Language:</span> </td>
                            <td><input type="text" value="" placeholder="Book Language Name" name="booklanguage"> </td>
                        </tr>
                        <tr>
                            <td><span>Book Country:</span> </td>
                            <td><input type="text" value="" placeholder="Book Country Name" name="bookcountry"> </td>
                        </tr>
    
                        <tr>
                            <td colspan="3" align="center"><input type="submit" value="Submit" name="submit">
                        </tr>
                    </table>
                </form>
        </fieldset>
    </body>
</html>