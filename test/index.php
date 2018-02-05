<html>
<head>
  <style>
  .purple {
    color: purple;
  }
  .block {
    display: block !important;
  }
  </style>
</head>

<body>
<?php
  //Content based on _GET['page'] value
  switch($_GET['archetype']){
      case "caregiver": //Form Page
          include("inc/caregiver.php");
          break;
      case "creator": //Form Page
          include("inc/creator.php");
          break;
      case "explorer": //Form Page
          include("inc/explorer.php");
          break;
      case "hero": //Form Page
          include("inc/hero.php");
          break;
      case "innocent": //Form Page
          include("inc/innocent.php");
          break;
      case "jester": //Form Page
          include("inc/jester.php");
          break;
      case "lover": //Form Page
          include("inc/lover.php");
          break;
      case "magician": //Form Page
          include("inc/magician.php");
          break;
      case "member": //Form Page
          include("inc/member.php");
          break;
      case "outlaw": //Form Page
          include("inc/outlaw.php");
          break;
      case "ruler":
          include("inc/ruler.php");
          break;
      case "sage":
          include("inc/sage.php");
          break;
      default: //Any page that is not defined in this switch will lead to this page
          include("inc/default.php");
  }
  ?>

<div id="order">
  <?php
    //Content based on _GET['page'] value
    switch($_GET['archetype']){
        case "caregiver": //Form Page
            echo "<a href='caregiver.html'>Order Now</a>";
            break;
        case "creator": //Form Page
            echo "<a href='creator.html'>Order Now</a>";
            break;
        case "explorer": //Form Page
            include("inc/explorer.php");
            break;
        case "hero": //Form Page
            include("inc/hero.php");
            break;
        case "innocent": //Form Page
            include("inc/innocent.php");
            break;
        case "jester": //Form Page
            include("inc/jester.php");
            break;
        case "lover": //Form Page
            include("inc/lover.php");
            break;
        case "magician": //Form Page
            include("inc/magician.php");
            break;
        case "member": //Form Page
            include("inc/member.php");
            break;
        case "outlaw": //Form Page
            include("inc/outlaw.php");
            break;
        case "ruler":
            include("inc/ruler.php");
            break;
        case "sage":
            include("inc/sage.php");
            break;
        default: //Any page that is not defined in this switch will lead to this page
            include("inc/default.php");
    }
    ?>
</div>
</body>
</html>
