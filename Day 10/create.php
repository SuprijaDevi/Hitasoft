<html>
    <head>
        <title>Create Data</title>
    </head>
    <body>
        <h2>Create Data</h2>
        <p>
            <a href="home.php">Home</a>
        </p>
        <form action="createAction.php" method="post" name="create">
            <table width="25%">
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="productName"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="productDescription"></td>
                </tr>
                <tr>
                    <td>Count</td>
                    <td><input type="text" name="productCount"></td>
                </tr>
                <tr>
                    <td>Seller Name</td>
                    <td><input type="text" name="sellerName"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Create"></td>
                </tr>
            </table>
        </form>
    </body>
</html>