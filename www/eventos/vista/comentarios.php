<!-- Comments Form -->
<div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        <form>
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>




<div class="row">
    <?php for ($i = 0; $i < 10; $i++) {
        ?>
        <!-- Single Comment -->
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">Commenter Name <?php echo $i; ?></h5>
                en la @CEE se debe ahcer algo para que no se muera sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <?php }
    ?>
</div>