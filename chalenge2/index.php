<?php
require 'coDB.php';
$co = new Connection("poo","root",""); 



if (isset($_POST['title'],$_POST['content'])){
    $onePost = new Post(null,$_POST['title'],$_POST['content']);
    $onePost->addPost();
}
if ($_POST['submitDelete']=='delete'){
    foreach($_POST['delete'] as $post){
        Post::removePost($post);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title">
        <label for="content">Content:</label>
        <textarea name="content"></textarea>
        <button type="submit" name="button">Submit</button>
	</form>


    <table>
        <thead>
            <tr>
                <th style="border: 1px outset">id</th>
                <th style="border: 1px outset">title</th>
                <th style="border: 1px outset">content</th>
            </tr>
        </thead>
        <tbody>
<?php
        echo '<form method="post">';
            foreach(Post::findAllPost() as $post){
                echo '<tr>';
                    echo '<td style="border: 1px solid black">'.$post->getId().'</td>';
                    echo '<td style="border: 1px solid black">'.$post->getTitle().'</td>';
                    echo '<td style="border: 1px solid black">'.$post->getContent().'</td>';
                    echo '<td style="border: 1px solid black"><input type="checkbox" value="'.$post->getId().'" name="delete[]"></td>';
                echo '</tr>';
            }
            echo '<input class="button" type="submit" name="submitDelete" value="delete">';
        echo '</form>';
?>
        </tbody>
    </table>
</body>
</html>