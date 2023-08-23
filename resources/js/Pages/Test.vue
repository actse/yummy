<template>
  <div>
    <data-table :data="products" :rows-per-page="rowsPerPage" />
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
