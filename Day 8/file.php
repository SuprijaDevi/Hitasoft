<!DOCTYPE html> 
<head>
    <title>File Handling</title>
</head>
<body>
    <?php 
        echo "Reads the content and number of bytes: ";
        echo readfile("sampleread.txt"); //Reads the file content and the number of bites.
        echo "<br>";
    ?>
    <?php 
        echo "Reads the file content: ";
        $myfile = fopen("sampleread.txt", "r") or die("Unable to open.");
        echo fread($myfile, filesize("sampleread.txt"));
        fclose($myfile); echo "<br>";

        echo "Reads the first line from the file: ";
        $myfile1 = fopen("sampleread.txt", "r") or die("Unable to open.");
        echo fgets($myfile1); //Read a single line from the file.
        fclose($myfile1);
        echo "<br>";

        echo "Reads till end of file: "; 
        $myfile2 = fopen("sampleread.txt", "r") or die("Unable to open");
        while(!feof($myfile2)) {         //Read till End-Of-File(feof()).
            echo fgets($myfile2) . "<br>";
        }
        fclose($myfile2);

        echo "Read single character: ";
        $myfile3 = fopen("sampleread.txt", "r") or die("Unable to open");
        while(!feof($myfile3)) {        //Output 1 char until end of file.
            echo fgetc($myfile3) . " ";
        }
        fclose($myfile3);
        echo "<br>";

        echo "Create file <br>";
        $myfile4 = fopen("textfile.txt", "w"); //Open a new file that does not exists.
        echo "File created successfully <br>";

        echo "Write to file: <br>";
        $myfile4 = fopen("textfile.txt", "w") or die("Unable to open");
        $txt = "Text to be written in the file.\n";
        fwrite($myfile4, $txt);
        fclose($myfile4);
        echo "Successfully written. <br>";
        /*If we open an existing file with write function, the contents will get vanished and we will start again with an empty file. */

        echo "Append text: <br>";
        $myfile4 = fopen("textfile.txt", "a") or die("Unable to open");
        $txt = "Appended text to the file.";
        fwrite($myfile4, $txt);
        fclose($myfile4);
        echo "Text appended successfully. <br>";
    ?>
</body>
</html>