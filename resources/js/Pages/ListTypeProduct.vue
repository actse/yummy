<template>
  <div class=" w-full relative bg-slate-100">
    <Sidennav>
      <h1 class="m-10 text-4xl font-bold text-gray-700">รายการประเภทแพ็คเกจ</h1>      
      <data-table :data="type_product" :rows-per-page="rowsPerPage" />
    </Sidennav>
  </div>
</template>

<script>
import DataTable from "@/components/DataTableType.vue";
import Sidennav from "@/components/Sidennav.vue";

export default {
  components: {
    DataTable,
    Sidennav,
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
