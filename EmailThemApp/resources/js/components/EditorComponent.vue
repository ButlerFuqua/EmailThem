<template>
  <textarea name="body" class="form-control" id="wysiwyg" cols="30" rows="10" v-text="info"></textarea>
</template>

<script>
export default {
  mounted() {
    tinymce.init({
      selector: "#wysiwyg"
    });
  },
  props: ["info"]
};
</script>

