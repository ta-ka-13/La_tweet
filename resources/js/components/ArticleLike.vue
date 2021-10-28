<template>
  <div>
    <button
      type="button"
      class="btn m-0 p-1 shadow-none"
    >
      <i class="fas fa-grin-alt mr-1"
      :class="{'red-text':this.isLikedBy}"
      />
    </button>
    10
  </div>
</template>


<script>

export default {
    props: {
      initialIsLikedBy: {
        type: Boolean,
        default: false,
      },
    },
    data() {
      return {
        // プロパティinitialIsLikedByの値をそのままデータisLikedByにセットしている
        isLikedBy: this.initialIsLikedBy,
      }
    },
  }

</script>
