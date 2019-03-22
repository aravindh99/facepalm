<?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b></b></p>
     </div>
    <div id="chatbox"></div>
</div>

<button onclick="load()">  refresh  </button>

<?php
}
?>