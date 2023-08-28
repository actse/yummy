<template>
  <div class="flex w-full min-h-screen relative bg-slate-100">
    <div class="bg-white w-56"><Sidennav/></div>
    <div class="mx-auto ">
      <data-table :data="products" :rows-per-page="rowsPerPage" />
    </div>
  </div>
</template>

<script>
import DataTable from "@/components/DataTableProduct.vue";
import Sidennav from "@/components/Sidennav.vue";

export default {
  components: {
    DataTable,
    Sidennav,
  },
  data() {
    return {
      products: []
    };
  },
  methods:{
    fetch_list_product() {
            axios
                .get("/fetch_list_product")
                .then((response) => {
                    this.products = response.data;
                    // console.log(this.products);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
  },
  mounted() {
        this.fetch_list_product();
  },
};
</script>
