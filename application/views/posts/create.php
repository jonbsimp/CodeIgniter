<h2><?= $title; ?></h2>
<br />
<!-- add form validation -->
<?php echo validation_errors(); ?>
<!-- Use form helper in autoload -->
<?php echo form_open('posts/create'); ?>
  <div>
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <br/>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
