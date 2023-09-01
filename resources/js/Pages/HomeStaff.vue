<template>
    <Sidennav>
        <div class="flex">
            <div class="flex w-9/12 h-full bg-slate-200 my-5 mx-2 rounded-lg">
                <div
                    class="flex flex-col h-full w-full bg-gray-100 my-5 mx-5 rounded-lg shadow-lg"
                >
                    <div
                        class="grid grid-cols-1 py-3 gap-3 xl:grid xl:grid-cols-4 xl:p-2 xl:gap-3 xl:my-3 shadow-lg dark:bg-gray-800"
                    >
                        <button
                            v-for="item in list_table"
                            @click="openservice(item.id, item.table_status)"
                            :class="{
                                'bg-white': item.table_status == 0,
                                'bg-red-400 text-white': item.table_status == 1,
                                'bg-orange-400 text-white':
                                    item.table_status == 2,
                                'md:w-auto xl:w-auto md:h-auto xl:h-auto md:my-2 md:mx-3 xl:my-0 border-2 xl:text-base rounded-md text-center shadow-lg border-slate-600': true,
                            }"
                        >
                            <div class="flex flex-row">
                                <div
                                    class="flex flex-col text-left ml-2 pt-2 pb-4 px-2 mr-3 text-md"
                                >
                                    <div class="text-xl font-bold">
                                        <label>
                                            โต๊ะ {{ item.table_name }}
                                        </label>
                                    </div>
                                    <div
                                        class=""
                                        v-for="itempm in main_package"
                                    >
                                        <label
                                            v-if="
                                                itempm.id == item.package_main
                                            "
                                        >
                                            {{ itempm.package_name }}
                                        </label>
                                    </div>
                                    <div class="" v-if="item.package_main == 0">
                                        <label> - </label>
                                    </div>
                                    <div
                                        class=""
                                        v-for="itemps in secondary_package"
                                    >
                                        <label
                                            v-if="
                                                itemps.id ==
                                                item.package_secondary
                                            "
                                        >
                                            {{ itemps.title_package }} (
                                            {{ itemps.package_price }} บาท )
                                        </label>
                                    </div>
                                    <div
                                        class=""
                                        v-if="item.package_secondary == 0"
                                    >
                                        <label> - </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            {{ item.customer_adult }}
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            {{ item.customer_children }}
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            {{ item.customer_baby }}
                                        </label>
                                    </div>
                                    <div class="text-md">
                                        <label>
                                            จำนวน
                                            {{ item.table_type }} ที่นั่ง
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex w-3/12 h-full bg-slate-200 my-5 mx-2 rounded-lg">
                <div
                    class="flex flex-col h-full w-full bg-gray-100 my-5 mx-5 rounded-lg shadow-lg"
                >
                    <div
                        class="grid grid-cols-1 py-3 gap-3 shadow-lg dark:bg-gray-800"
                    >
                        <button
                            v-for="item in list_registable"
                            @click="openservice(item.id, item.table_status)"
                            :class="{
                                'bg-white': item.table_status == 0,
                                'bg-red-400 text-white': item.table_status == 1,
                                'bg-orange-400 text-white':
                                    item.table_status == 2,
                                'md:w-auto xl:w-auto md:h-auto xl:h-auto md:my-2 md:mx-3 xl:my-0 border-2 xl:text-base rounded-md text-center shadow-lg border-slate-600': true,
                            }"
                        >
                            <div class="flex flex-row">
                                <div
                                    class="flex flex-col text-left ml-2 pt-2 pb-4 px-2 mr-3 text-md"
                                >
                                    <div class="text-xl font-bold">
                                        <label>
                                            โต๊ะ {{ item.table_name }}
                                        </label>
                                    </div>
                                    <div
                                        class=""
                                        v-for="itempm in main_package"
                                    >
                                        <label
                                            v-if="
                                                itempm.id == item.package_main
                                            "
                                        >
                                            {{ itempm.package_name }} ( {{ itempm.package_price }} บาท )
                                        </label>
                                    </div>
                                    <div class="" v-if="item.package_main == 0">
                                        <label> - </label>
                                    </div>
                                    <div
                                        class=""
                                        v-for="itemps in secondary_package"
                                    >
                                        <label
                                            v-if="
                                                itemps.id ==
                                                item.package_secondary
                                            "
                                        >
                                            {{ itemps.title_package }} (
                                            {{ itemps.package_price }} บาท )
                                        </label>
                                    </div>
                                    <div
                                        class=""
                                        v-if="item.package_secondary == 0"
                                    >
                                        <label> - </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            {{ item.customer_adult }}
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            {{ item.customer_children }}
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            {{ item.customer_baby }}
                                        </label>
                                    </div>
                                    <div class="text-md">
                                        <label>
                                            จำนวน
                                            {{ item.table_type }} ที่นั่ง
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </Sidennav>
    <ServicetableModal v-if="isModalregistable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>ลงทะเบียน โต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="close('close_service', this.table)"
                    class="absolute w-3 top-0 right-0"
                    src="../../imgs/X.svg"
                />
            </button>
        </div>
        <!-- Form Edit Product Menu -->
        <div class="bg-white w-full px-4 pb-4">
            <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                <div class="w-full bg-white text-center">
                    <button
                        @click="choose_service('registable', this.table)"
                        class="mx-2 bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ลงทะเบียน
                    </button>
                    <button
                        @click="choose_service('payment', this.table)"
                        class="mx-2 bg-green-500 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ชำระเงิน
                    </button>
                </div>
            </div>
        </div>
    </ServicetableModal>
    <ServicetableModal v-if="isRegistable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>ลงทะเบียน โต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="close('close_registable', this.table)"
                    class="absolute w-4 top-0 right-0"
                    src="../../imgs/X.svg"
                />
            </button>
        </div>
        <!-- Form Insert table -->
        <div class="bg-white w-full px-4 border-t-2 pt-3">
            <form
                @submit.prevent="register_table"
                enctype="multipart/form-data"
                class="w-full max-w-lg"
            >
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-3/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจ
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="package_main"
                        >
                            <option disabled value="">
                                กรุณาเลือกแพ็คเกจหลัก
                            </option>
                            <option
                                v-for="packaged in main_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.package_name }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจเสริม
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="package_secondary"
                        >
                            <option disabled value="">
                                กรุณาเลือกแพ็คเกจเสริม
                            </option>
                            <option
                                v-for="packaged in secondary_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.title_package }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                    </div>
                    <div class="w-full md:w-2/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="customer_adult"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็กโต (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="customer_children"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็ก (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="customer_baby"
                        />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div
                        class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                    >
                        <button
                            class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white"
                            type="submit"
                        >
                            ลงทะเบียนโต๊ะ ( {{ this.table }} )
                        </button>
                        <button
                            type="button"
                            @click="reserve_table(this.table)"
                            class="mx-2 bg-orange-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                        >
                            ลงทะเบียน (จอง) โต๊ะ ( {{ this.table }} )
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </ServicetableModal>
    <ServicetableModal v-if="isEdittable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>รายละเอียดโต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="close('close_edittable', this.table)"
                    class="absolute w-4 top-0 right-0"
                    src="../../imgs/X.svg"
                />
            </button>
        </div>
        <div
            class="flex items-center justify-center bg-white w-full px-4 border-t-2 pt-3"
        >
            <form
                @submit.prevent="edit_table"
                enctype="multipart/form-data"
                class="w-full max-w-lg"
            >
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-3/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจ
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="editpackage_main"
                        >
                            <option
                                disabled
                                value="กรุณาเลือกแพ็คเกจหลัก"
                            ></option>
                            <option
                                v-for="packaged in main_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.package_name }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจเสริม
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="editpackage_secondary"
                        >
                            <option
                                disabled
                                value="กรุณาเลือกแพ็คเกจเสริม"
                            ></option>
                            <option
                                v-for="packaged in secondary_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.title_package }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            กรุณาเลือกโต๊ะที่ต้องการ
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="new_table_number"
                        >
                            <option disabled value="">
                                กรุณาเลือกโต๊ะที่ต้องการ
                            </option>
                            <option
                                v-for="item in list_table"
                                :key="item.id"
                                :value="item.id"
                                :disabled="item.table_status != 0"
                            >
                                โต๊ะหมายเลข {{ item.id }}
                                {{ getStatusText(item.table_status) }}
                            </option>
                        </select>
                    </div>
                    <div class="w-full md:w-2/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editcustomer_adult"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็กโต (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editcustomer_children"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็ก (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editcustomer_baby"
                        />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div
                        class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                    >
                        <button
                            class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white"
                            type="submit"
                        >
                            แก้ไขรายละเอียดโต๊ะ ( {{ this.table }} )
                        </button>
                        <button
                            type="button"
                            @click="cancel_table(this.id, this.table)"
                            class="mx-2 bg-red-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                        >
                            ยกเลิกโต๊ะ {{ this.table }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </ServicetableModal>
    <ServicetableModal v-if="isConfirmtable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>รายละเอียดโต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="close('close_confirmtable', this.table)"
                    class="absolute w-4 top-0 right-0"
                    src="../../imgs/X.svg"
                />
            </button>
        </div>
        <div
            class="flex items-center justify-center bg-white w-full px-4 border-t-2 pt-3"
        >
            <form
                @submit.prevent="confirm_table(this.id)"
                enctype="multipart/form-data"
                class="w-full max-w-lg"
            >
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-3/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจ
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="editpackage_main"
                        >
                            <option
                                disabled
                                value="กรุณาเลือกแพ็คเกจหลัก"
                            ></option>
                            <option
                                v-for="packaged in main_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.package_name }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจเสริม
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="editpackage_secondary"
                        >
                            <option
                                disabled
                                value="กรุณาเลือกแพ็คเกจเสริม"
                            ></option>
                            <option
                                v-for="packaged in secondary_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.title_package }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                    </div>
                    <div class="w-full md:w-2/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editcustomer_adult"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็กโต (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editcustomer_children"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็ก (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editcustomer_baby"
                        />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div
                        class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                    >
                        <button
                            class="bg-green-400 w-52 h-11 rounded-lg shadow-md text-white"
                            type="submit"
                        >
                            ลงทะเบียนโต๊ะ ( {{ this.table }} )
                        </button>
                        <button
                            type="button"
                            @click="cancel_table(this.id, this.table)"
                            class="mx-2 bg-red-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                        >
                            ยกเลิกโต๊ะ ( {{ this.table }} )
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </ServicetableModal>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import MenuModal from "@/components/MenuModal.vue";
import Registable from "@/components/MenuModal.vue";
import ServicetableModal from "@/components/ServicetableModal.vue";
import Sidennav from "@/components/Sidennav.vue";

export default {
    components: {
        Sidennav,
        MenuModal,
        Registable,
        ServicetableModal,
    },
    data() {
        return {
            isRegistable: false,
            isConfirmtable: false,
            isModalregistable: false,
            isCanceltable: false,
            isEdittable: false,
            isPayment: false,
            list_table: [],
            list_bills: [],
            list_jointable: [],
            table: "",
            customer_adult: "",
            customer_children: "",
            customer_baby: "",
            main_package: "",
            package_main: "",
            secondary_package: "",
            package_secondary: "",
            status: "",
            new_table_number: "",
            editpackage_main: null,
            editpackage_secondary: null,
            editmain: "",
            editsecondary: "",
            editpackage_main: "",
            editpackage_secondary: "",
            editcustomer_adult: "",
            editcustomer_children: "",
            editcustomer_baby: "",
            list_registable: "",
        };
    },
    methods: {
        getStatusText(status) {
            return status == 0 ? "( ว่าง )" : "( ไม่ว่าง )";
        },
        openservice(item, status) {
            if (status == 0) {
                this.isModalregistable = true;
                this.table = item;
                return;
            }

            if (status == 1) {
                this.table = item;
                this.status = status;

                axios
                    .get("/selectdatatable")
                    .then((response) => {
                        if (response.data != []) {
                            for (let item of response.data) {
                                if (this.table == item.table_id) {
                                    this.id = item.id;
                                    this.editpackage_main = item.package_main;
                                    this.editpackage_secondary =
                                        item.package_secondary;
                                    this.editcustomer_adult =
                                        item.customer_adult;
                                    this.editcustomer_children =
                                        item.customer_children;
                                    this.editcustomer_baby = item.customer_baby;
                                }
                            }
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                    });

                this.isEdittable = true;
                return;
            }

            if (status == 2) {
                this.table = item;
                this.status = status;

                axios
                    .get("/selectdatatable")
                    .then((response) => {
                        if (response.data != []) {
                            for (let item of response.data) {
                                if (this.table == item.table_id) {
                                    this.id = item.id;
                                    this.editpackage_main = item.package_main;
                                    this.editpackage_secondary =
                                        item.package_secondary;
                                    this.editcustomer_adult =
                                        item.customer_adult;
                                    this.editcustomer_children =
                                        item.customer_children;
                                    this.editcustomer_baby = item.customer_baby;
                                }
                            }
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                    });

                this.isConfirmtable = true;
                return;
            }
        },
        choose_service(title, item) {
            if (title == "registable") {
                this.isRegistable = true;
                this.table = item;
            }
            if (title == "payment") {
                this.table = item;
            }
        },
        close(item, table) {
            if (item == "close_service") {
                this.table = "";
                this.isModalregistable = false;
            }
            if (item == "close_registable") {
                this.table = table;
                this.isRegistable = false;
                this.isModalregistable = true;
            }
            if (item == "close_edittable") {
                this.table = table;
                this.isEdittable = false;
            }
            if (item == "close_confirmtable") {
                this.table = table;
                this.isConfirmtable = false;
            }
        },
        fetch_main_package() {
            axios
                .get("/fetch_package")
                .then((response) => {
                    if (response.data != []) {
                        this.main_package = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_secondary_package() {
            axios
                .get("/fetch_secondary_package")
                .then((response) => {
                    if (response.data != []) {
                        this.secondary_package = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_table() {
            axios
                .get("/fetch_table")
                .then((response) => {
                    if (response.data != []) {
                        this.list_table = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_registable() {
            axios
                .get("/selectregistable")
                .then((response) => {
                    if (response.data != []) {
                        this.list_registable = response.data;

                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_bills() {
            axios
                .get("/fetch_bills")
                .then((response) => {
                    if (response.data != []) {
                        this.list_bills = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        register_table() {
            const formData = new FormData();

            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", this.table);
            formData.append("customer_adult", this.customer_adult);
            formData.append("customer_children", this.customer_children);
            formData.append("customer_baby", this.customer_baby);
            formData.append("main_package", this.package_main);
            formData.append("secondary_package", this.package_secondary);
            formData.append("status", 1);

            axios
                .post("/insert_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isRegistable = false;
                    this.isModalregistable = false;
                    this.isConfirmtable = false;
                    this.fetch_bills();
                    this.table = "";
                    this.customer_adult = "";
                    this.customer_children = "";
                    this.customer_baby = "";
                    this.package_main = "";
                    this.package_secondary = "";
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        edit_table() {
            const formData = new FormData();
            formData.append("bills_id", this.id);
            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", this.table);
            formData.append("customer_adult", this.editcustomer_adult);
            formData.append("customer_children", this.editcustomer_children);
            formData.append("customer_baby", this.editcustomer_baby);
            formData.append("main_package", this.editpackage_main);
            formData.append("secondary_package", this.editpackage_secondary);
            formData.append("status", 1);
            formData.append("new_table", this.new_table_number);

            axios
                .post("/edit_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isEdittable = false;
                    this.id = "";
                    this.table = "";
                    this.customer_adult = "";
                    this.customer_children = "";
                    this.customer_baby = "";
                    this.package_main = "";
                    this.package_secondary = "";
                    this.new_table_number = "";
                    this.fetch_table();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        cancel_table(billsid, id) {
            const formData = new FormData();
            formData.append("bills_id", billsid);
            formData.append("table_id", id);

            axios
                .post("/close_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.fetch_table();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        reserve_table(id) {
            const formData = new FormData();

            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", id);
            formData.append("customer_adult", this.customer_adult);
            formData.append("customer_children", this.customer_children);
            formData.append("customer_baby", this.customer_baby);
            formData.append("main_package", this.package_main);
            formData.append("secondary_package", this.package_secondary);
            formData.append("status", 2);

            axios
                .post("/reserve_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isRegistable = false;
                    this.isModalregistable = false;
                    this.isConfirmtable = false;
                    this.fetch_table();
                    this.table = "";
                    this.customer_adult = "";
                    this.customer_children = "";
                    this.customer_baby = "";
                    this.package_main = "";
                    this.package_secondary = "";
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        confirm_table() {
            const formData = new FormData();
            formData.append("bills_id", this.id);
            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", this.table);
            formData.append("customer_adult", this.editcustomer_adult);
            formData.append("customer_children", this.editcustomer_children);
            formData.append("customer_baby", this.editcustomer_baby);
            formData.append("main_package", this.editpackage_main);
            formData.append("secondary_package", this.editpackage_secondary);
            formData.append("status", 1);
            formData.append("new_table", this.new_table_number);
            formData.append("status", 1);

            axios
                .post("/confirm_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isRegistable = false;
                    this.isModalregistable = false;
                    this.isConfirmtable = false;
                    this.fetch_table();
                    this.table = "";
                    this.customer_adult = "";
                    this.customer_children = "";
                    this.customer_baby = "";
                    this.package_main = "";
                    this.package_secondary = "";
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        isPayment() {
            const formData = new FormData();
            formData.append("bills_id", this.id);
            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", this.table);
            formData.append("customer_adult", this.editcustomer_adult);
            formData.append("customer_children", this.editcustomer_children);
            formData.append("customer_baby", this.editcustomer_baby);
            formData.append("main_package", this.editpackage_main);
            formData.append("secondary_package", this.editpackage_secondary);
            formData.append("status", 1);
            formData.append("new_table", this.new_table_number);
            formData.append("status", 1);

            axios
                .post("/payment_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isRegistable = false;
                    this.isModalregistable = false;
                    this.isConfirmtable = false;
                    this.fetch_table();
                    this.table = "";
                    this.customer_adult = "";
                    this.customer_children = "";
                    this.customer_baby = "";
                    this.package_main = "";
                    this.package_secondary = "";
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetch_bills();
        this.fetch_table();
        this.fetch_registable();
        this.fetch_main_package();
        this.fetch_secondary_package();
    },
};
</script>

<style></style>
