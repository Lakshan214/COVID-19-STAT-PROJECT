<template>
  <form @submit.prevent="submitForm">
    <div class="form-group">
      <label for="link">Link</label>
      <input type="text" class="form-control" id="link" v-model="formData.link" required>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" v-model="formData.description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</template>

import axios from 'axios'; 
<script>
export default {
  data() {
    return {
      formData: {
        link: '',
        description: '',
      },
    };
  },
  methods: {
    submitForm() {
      this.$emit('submit', this.formData);
      this.formData.link = '';
      this.formData.description = '';
    },
  },
};
</script>
