<template>
    <div>
        <button data-open="checkoutDetailModal">
            <i class="fa fa-shopping-cart fa-2x" aria-hidden="True">
            </i>
            Keranjang
            <span class="alert badge">
                               {{ cartcount }}
                            </span>
        </button>

    </div>
</template>

<script>
export default {
  props: ["cartcount"],

  data() {
    return {};
  },

  created() {}
};
</script>
