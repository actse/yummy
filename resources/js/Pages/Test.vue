<template>
  <div class="w-full min-h-screen relative">
    <div class=" mx-auto h-screen bg-gradient-to-br from-indigo-200 via-red-200 to-yellow-100 border md:w-full">
      <data-table :data="products" :rows-per-page="rowsPerPage" />
    </div>
  </div>
</template>

<script>
import DataTable from "@/components/DataTable.vue";

export default {
  components: {
    DataTable
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
