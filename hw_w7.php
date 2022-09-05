<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>6230300567</title>
</head>

<body>
<div class="container text-center">
        <br>
        <h3>Sanrio Shop</h3>
        <br>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Image</td>
                </tr>
            </thead>

            <tbody>
                
            <?php

            $arrList = array
            (
                array("01","SANRIO ปากกา2C Pochacco รุ่น 582701PC0521",59,"https://backend.central.co.th/media/catalog/product/c/d/cds83822285-1.jpg?impolicy=resize&width=553"),
                array("02","SANRIO ปากกา2C Pompompurin รุ่น 582671PN0521",59 ,"https://backend.central.co.th/media/catalog/product/c/d/cds83822278-1.jpg?impolicy=resize&width=553"),
                array("03","ชุดผ้าปิดจมูก 2 ชิ้น สำหรับผู้ใหญ่ ลาย Little Twin Stars",129,"https://backend.central.co.th/media/catalog/product/c/d/cds79751841-1.jpg?impolicy=resize&width=553"),
                array("04","ชุดผ้าปิดจมูก 2 ชิ้น สำหรับผู้ใหญ่ ลาย Bad Badtz-Maru",129,"https://backend.central.co.th/media/catalog/product/c/d/cds79751827-1.jpg?impolicy=resize&width=553"),
                array("05","ชุดผ้าปิดจมูก 2 ชิ้น สำหรับผู้ใหญ่ ลาย My Melody",129 ,"https://backend.central.co.th/media/catalog/product/c/d/cds79751834-1.jpg?impolicy=resize&width=553"),
                array("06","กระเป๋าใส่เอกสารลาย Little Twin Stars",199 ,"https://backend.central.co.th/media/catalog/product/c/d/cds21565144-1.jpg?impolicy=resize&width=553"),
                array("07","กระเป๋าใส่เอกสารลาย Hello Kitty",199 ,"https://backend.central.co.th/media/catalog/product/c/d/cds21565113-1.jpg?impolicy=resize&width=553"),
                array("08","กระเป๋าใส่เอกสารลาย Minna No Tabo",199 ,"https://backend.central.co.th/media/catalog/product/c/d/cds21565137-1.jpg?impolicy=resize&width=553"),
                array("09","แก้วน้ำสุญญากาศ Bad Badtz-Maru",399,"https://backend.central.co.th/media/catalog/product/c/d/cds87795028-1.jpg?impolicy=resize&width=553"),
                array("10","แก้วน้ำสุญญากาศ Hello Kitty",399 ,"https://backend.central.co.th/media/catalog/product/c/d/cds87794991-1.jpg?impolicy=resize&width=553")
            );

            for($i=0;$i<10;$i++)
            {
                $red = rand(0,255);
                $green = rand(0,255);
                $blue = rand(0,255);

                echo "<tr><td><font style='color:rgb($red,$green,$blue);'>";
                echo $arrList[$i][0];
                echo "</font></td><td><font style='color:rgb($red,$green,$blue);'>";
                echo $arrList[$i][1];
                echo "</font></td><td><font style='color:rgb($red,$green,$blue);'>";
                echo $arrList[$i][2];
                echo "</font></td><td><font style='color:rgb($red,$green,$blue);'><img style='width:100px' src=";
                echo $arrList[$i][3];
                echo "></font></td>";
            }
            ?>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
