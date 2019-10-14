<template>
  <div class="card border-0 mb-3">
    <div class="card-body">
      <div class="form-group">
        <textarea
          class="form-control comment-post"
          id="exampleFormControlTextarea1"
          rows="2"
          placeholder="Once upon a time.."
        ></textarea>
        <div class="row">
          <div class="col-sm-6 pt-3">
            <i class="far fa-smile mr-2"></i>
            <i class="far fa-images"></i>
          </div>
          <div class="col-sm-6">
            <input class="btn btn-home btn-sm float-right mt-2" type="submit" value="Post" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [],
  data() {
    return {};
  }
};
</script>

<style scoped>
</style>