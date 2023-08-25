<template>
    <div class="w-full min-h-screen relative">
    <div class=" mx-auto my-auto h-screen bg-gradient-to-br from-indigo-200 via-red-200 to-yellow-100 border md:w-full">
      <data-table :data="type_product" :rows-per-page="rowsPerPage" />
    </div>
  </div>
</template>

<script>
import DataTable from "@/components/DataTableType.vue";

export default {
  components: {
    DataTable
  },
  data() {
    return {
        type_product: []
    };
  },
  methods:{
    fetch_type_product() {
            axios
                .get("/fetch_type_product")
                .then((response) => {
                    if (response.data != []) {
                        this.type_product = response.data;
                        // console.log(response.data);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
  },
  mounted() {
        this.fetch_type_product();
  },
};
</script>