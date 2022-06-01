<template>
  <div class="mb-3">
    <label :for="name + 'FileInput'" class="form-label">
      {{ label }}
    </label>
    <input type="file"
           class="form-control" :class="{'is-invalid': error}"
           :accept="accept"
           :id="name + 'FileInput'"
           :name="name"
           @change="onImgChange">
    <template v-if="error">
    <span class="invalid-feedback" role="alert">
      <strong>{{ error }}</strong>
    </span>
    </template>

    <div class="d-flex">
      <img v-for="img of selectedFiles" :key="img"
           :src="selectedFiles"
           style="width: 100px"
           class="img-thumbnail"
      >
    </div>
  </div>
</template>

<script>
export default {
  name: 'FileInput',
  props: {
    name: String,
    label: String,
    error: String,
    accept: String
  },
  data () {
    return {
      selectedFiles: []
    }
  },
  methods: {
    onImgChange (event) {
      const files = event.target.files

      this.selectedFiles = []

      Array(...files).forEach(file => {
        this.selectedFiles.push(URL.createObjectURL(file))
      })
    }
  }
}
</script>

<style scoped>

</style>
