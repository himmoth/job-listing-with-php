<?php include 'inc/header.php';?>

<div class="container">
    <form action="edit.php?id=<?php echo $job->id; ?>" method="POST" class="form">
    <h2 class="center title-create">Edit Job Listing</h2>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" name="company" placeholder="Company" id="company" value="<?php echo $job->company;?>">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category" id="" class="form-control">
                  <option value="0" >Choose A Category</option>
                    <?php foreach($categories as $category): ?>
                        <?php if($job->category_id == $category->id):?>
                            <option value="<?php echo $category->id;?>"selected><?php echo $category->name;?></option>
                        <?php else: ?>
                            <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                        <?php endif;?>
                    <?php endforeach ; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="job-title">Job Title</label>
            <input type="text" class="form-control" name="job-title" placeholder="Job Title" id="job-title" value="<?php echo $job->title;?>">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
           <textarea name="description" id="desc"  rows="3" placeholder="Desc..."><?php echo $job->description;?></textarea>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location" id="location" value="<?php echo $job->location;?>">
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" name="salary" placeholder="Salary" id="salary" value="<?php echo $job->salary;?>">
        </div>
        <div class="form-group">
            <label for="contact-user">Contact User</label>
            <input type="text" class="form-control" name="contact-user" placeholder="Contact-User" id="contact-user" value="<?php echo $job->contact_user;?>">
        </div>
        <div class="form-group">
            <label for="contact-email">Contact Email</label>
            <input type="text" class="form-control" name="contact-email" placeholder="Contact Email" id="contact-email" value="<?php echo $job->contact_email;?>">
        </div>
        <input type="submit" name="submit" class="btn-save" value="Update">
    </form>
</div>






<?php include 'inc/footer.php';?>
