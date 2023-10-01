<?php include 'inc/header.php';?>

<div class="container ">
   <div class="job-single">
    <a href="index.php" class="back">Back</a>
   <h2 class=""><?= $job->title;?> (<?= $job->location;?>)</h2>
    <small>Posted By <?= $job->contact_user;?> on <?= date_format(new DateTime($job->post_date),'d-m-Y');?></small>
    <p class=""><?= $job->description;?></p>
    <ul>
        <li><strong>Company:</strong><?= $job->company;?></li>
        <li><strong>Salary:</strong> $<?= $job->salary;?></li>
        <li><strong>Contact Email:</strong><?= $job->contact_email;?></li>
    </ul>
    <div class="btn-edit-del">
        <a class="btn edit" href="edit.php?id=<?php echo $job->id;?>">Edit</a>
        <form action="job.php" method="POST">
            <input type="hidden" name="del_id" value="<?php echo $job->id;?>">
            <input type="submit" class="btn delete" value="Delete" name="submit">
        </form>
    </div>
   </div>
</div>
<?php include 'inc/footer.php';?>
