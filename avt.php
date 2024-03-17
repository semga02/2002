
		<p><?php
$host='localhost';
$database='test1';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Email'])&& isset($_POST['password'])){
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	
	$chzapr = mysqli_query($link, "SELECT Name from sot where Email ='".$Email."' and Password ='".$Password."'");
    if (mysqli_num_rows($chzapr) > 0) {
        $zapros = mysqli_fetch_assoc($chzapr);

        $_SESSION['zapros'] = [
            "Name" => $zapros['Name']
        ];
		
		echo "Имя: ".$_SESSION['zapros']['Name'];

    } else {
		echo "Не верный логин или пароль!";
    }
}
		?> </p>
		
      </form>