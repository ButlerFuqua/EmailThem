<template>
  <div>
    <form action>
      <div class="form-group">
        <label for="title">Title of Email</label>
        <input id="title" name="title" type="text" class="form-control" />
      </div>
      <div class="form-group">
        <label for="from">Email is from</label>
        <input id="from" name="from" type="text" class="form-control" />
      </div>
      <div class="form-group">
        <label for="subject">Email Subject</label>
        <input id="subject" name="subject" type="text" class="form-control" />
      </div>
      <div class="form-group">
        <label for="wysiwyg">Email Message</label>
        <textarea name="body" class="form-control" id="wysiwyg" cols="30" rows="10"></textarea>
      </div>
    </form>
  </div>
</template>


<script>
export default {
  mounted() {
    tinymce.init({
      selector: "#wysiwyg"
    });
  }
};
</script>
