<?php
    include_once'config/init.php';
?>

<?php
$job = new Job();

if(isset($_POST['submit'])){
   $titleErr = $companyErr = $categoryErr = $descriptionErr = $locationErr = $salaryErr = $contactUserErr = $contactEmialErr = "";
    // Create Data Array 
    $data = array();
    $data['title'] = $_POST['job-title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact-user'] = $_POST['contact-user'];
    $data['contact-email'] = $_POST['contact-email'];
    // if(!empty($_POST['job-title'])){
    //     $data['title'] = $_POST['job-title'];
    // }else {
    //     echo $titleErr ="Title is required";
    // }
    // if(!empty($_POST['category'])){
    //     $data['company'] = $_POST['company'];
    // }else {
    //     echo $companyErr ="Company is required";
    // }
    // if(!empty($_POST['category'])){
    //     $data['category'] = $_POST['category'];
    // }else {
    //     echo $categoryErr ="Category is required";
    // }
    // if(!empty($_POST['description'])){
    //     $data['description'] = $_POST['description'];
    // }else {
    //     echo $descriptionErr ="Description is required";
    // }
    // if(!empty($_POST['location'])){
    //     $data['location'] = $_POST['location'];
    // }else {
    //     echo $locationErr ="Location is required";
    // }
    // if(!empty($_POST['salary'])){
    //     $data['salary'] = $_POST['salary'];
    // }else {
    //     echo $salaryErr ="Salary is required";
    // }
    // if(!empty($_POST['contact-user'])){
    //     $data['contact-user'] = $_POST['contact-user'];
    // }else {
    //     echo $contactUserErr ="Contact user is required";
    // }
    // if(!empty($_POST['contact-email'])){
    //     $data['contact-email'] = $_POST['contact-email'];
    // }else {
    //     echo $contactEmialErr ="Contact email is required";
    // }

    if($job->create($data)){
        redirect('index.php', 'Your job has been created', 'success');
    }else{
        redirect('index.php', 'Somthing went wrong', 'error');

    }

}

$template = new Template('templates/job-create.php');


$template->categories = $job->getCategories(); 

echo $template;
?>




  