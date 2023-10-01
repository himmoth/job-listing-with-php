<?php
    include_once'config/init.php';
?>

<?php
$job = new Job();
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
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

    if($job->update($job_id, $data)){
        redirect('index.php', 'Your job has been updated', 'success');
    }else{
        redirect('index.php', 'Somthing went wrong', 'error');

    }

}

$template = new Template('templates/job-edit.php');

$template->job = $job->getJob($job_id); 

$template->categories = $job->getCategories(); 

echo $template;
?>




  