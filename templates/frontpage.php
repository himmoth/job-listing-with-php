<?php include 'inc/header.php';?>

<section >
        <div class="container">
            <div class="find-job ">
                <h1 class="find-title">Find A Job</h1>
                <form action="index.php" method="GET">
                <select name="category" id="">
                    <option value="0" >Choose A Category</option>
                    <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                    <?php endforeach ; ?>

                </select>
                <input type="submit" class="btn-find" value="FIND">
                </form>
            </div>
        </div>
    </section>
    <section>
    <div class="container job-list">
        <h2 class="latest-title"><?= $title;?></h2>

        <?php foreach($jobs as $job): ?>
       <div class="box-job">
       
            <div class="job-info">
                <h4> <?php echo $job->title;?></h4>
                <p><?php echo $job->description;?></p>
                <p class="category"><?php echo $job->cname;?></p>
            </div>
        <a href="job.php?id=<?php echo $job->id;?>"class="btn-view">View</a>

       </div>
       <?php endforeach ; ?>

    </div>
   
    </section>


<?php include 'inc/footer.php';?>
