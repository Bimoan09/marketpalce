<template>
    <div class="container">
        <div class="row">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <button @click="addToCart"  class="button expanded add-to-cart">
                        Tambah Ke Keranjang
                    </button>

                    
                    <a href="#">
                        <img :src='shirtimagepath' />
                    </a>
                </div>
                <a :href="shirtlink">
                    <h3>
                        {{shirt.name}}
                        </h3>
                </a>
                <h5>
                    Rp. {{ shirt.price }}
                    </h5>

 <h5>
                     {{ shirt.category }}
                    </h5>

                <h5>
                     {{ shirt.description }}
                    </h5>
               
            </div>
        </div>
    </div>
</template>

<script>
export default {
  props: ["shirt", "shirtlink", "shirtimagepath"],
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    addToCart() {
      bus.$emit("added-to-cart", this.shirt);
    },
    addToCompare() {
      bus.$emit("added-to-compare", this.shirt);
    },
    htmlToText(html) {
      var tag = document.createElement("div");
      tag.innerHTML = html;

      return tag.innerText;
    }
  }
};
</script>
