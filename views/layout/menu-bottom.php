<a href='?option=home'>Home</a>
<a href='?option=news'>News</a>
<a href='?option=feedback'>Feedback</a>
<a href='?option=cart'>Cart</a>
<?php if (empty($_SESSION['member'])) :?>
    <a href='?option=signin'>Sign In</a>
    <a href='?option=register'>Register</a>
<?php else :?>
    <a>Hello what's up <?= $_SESSION['member'] ?></a>
    <a href='?option=logout'>Logout</a>
<?php endif ;?>