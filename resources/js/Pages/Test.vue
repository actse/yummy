<template>
    <Sidennav>
        <div class="flex">
            <div class="flex w-9/12 h-full bg-slate-100 my-5 mx-2 rounded-lg">
                <div
                    class="flex flex-col h-full w-full bg-[#ebbb83] my-5 mx-5 rounded-lg shadow-lg shadow-slate-600"
                >
                    <label class="text-2xl pt-4 px-5 -mb-5 text-gray-700"
                        >ลงทะเบียนโต๊ะ (Booking table)</label
                    >
                    <div
                        class="grid grid-cols-1 py-3 gap-3 xl:grid xl:grid-cols-3 xl:p-2 xl:gap-3 xl:my-3 shadow-lg dark:bg-gray-800"
                    >
                        <button
                            v-for="list in list_table"
                            class="p-2 text-gray-500"
                        >
                            <div
                                @click="openservice(list.id, list.table_status)"
                                :class="{
                                    'hover:-translate-y-1 hover:shadow-lg hover:border-4 hover:border-teal-500 hover:border-solid focus:-translate-y-1 focus:shadow-lg focus:border-2 focus:border-teal-500 focus:border-solid':
                                        list.table_status == 0,
                                    'hover:-translate-y-1 hover:shadow-lg hover:border-4 hover:border-red-500 hover:border-solid focus:-translate-y-1 focus:shadow-lg focus:border-2 focus:border-red-500 focus:border-solid':
                                        list.table_status == 1,
                                    'hover:-translate-y-1 hover:shadow-lg hover:border-4 hover:border-orange-500 hover:border-solid focus:-translate-y-1 focus:shadow-lg focus:border-2 focus:border-orange-500 focus:border-solid':
                                        list.table_status == 2,
                                    'bg-white shadow-md shadow-gray-300 rounded-lg overflow-hidden p-5 relative transition-transform ease-in transform ': true,
                                }"
                            >
                                <div class="flex items-center justify-between">
                                    <img
                                        class="w-full h-32 border-1 border-white rounded-md"
                                        src="../../imgs/shabushabu.jpeg"
                                    />
                                </div>
                                <div
                                    class="flex items-center justify-between mt-2"
                                >
                                    <div
                                        class="font-normal text-lg leading-tight mr-2"
                                    >
                                        หมายเลขโต๊ะ {{ list.table_name }}
                                    </div>
                                    <div
                                        class="flex flex-row items-center text-gray-700"
                                    >
                                        <div class="flex flex-row text-md ml-3">
                                            <svg
                                                class="w-7 h-7 text-yellow-400 mt-1.5 mr-1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                />
                                            </svg>
                                            <div class="flex flex-col">
                                                <label class="mt-2"
                                                    >สถานะ</label
                                                >
                                            </div>
                                            <div class="flex flex-col">
                                                <svg
                                                    v-if="
                                                        list.table_status == 0
                                                    "
                                                    class="ml-2 h-10 w-10"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        d="M16.5163 8.93451L11.0597 14.7023L8.0959 11.8984"
                                                        stroke="#3CB371"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                        stroke="#3CB371"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                                <svg
                                                    v-else-if="
                                                        list.table_status == 1
                                                    "
                                                    class="ml-2 h-10 w-10"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        d="M7.95206 16.048L16.0769 7.92297"
                                                        stroke="#DC143C"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M16.0914 16.0336L7.90884 7.85101"
                                                        stroke="#DC143C"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                        stroke="#DC143C"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                                <svg
                                                    v-else-if="
                                                        list.table_status == 2
                                                    "
                                                    class="ml-2 h-10 w-10"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <circle
                                                        cx="12"
                                                        cy="12"
                                                        r="9"
                                                        stroke="#FF7F50"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                    />
                                                    <rect
                                                        height="0.01"
                                                        stroke="#FF7F50"
                                                        stroke-linejoin="round"
                                                        stroke-width="3"
                                                        width="0.01"
                                                        x="12"
                                                        y="16"
                                                    />
                                                    <path
                                                        d="M12 12L12 8"
                                                        stroke="#FF7F50"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-row">
                                        <div
                                            class="flex flex-row w-full text-md pt-2 ml-2"
                                        >
                                            <div
                                                class="flex flex-col items-center justify-center"
                                            >
                                                <Adulticon></Adulticon>
                                            </div>
                                            <div
                                                v-if="
                                                    list.bill_customer_adult !=
                                                    null
                                                "
                                                class="flex flex-col p-3 mx-2"
                                            >
                                                {{ list.bill_customer_adult }}
                                            </div>
                                            <div
                                                v-if="
                                                    list.bill_customer_adult ==
                                                    null
                                                "
                                                class="flex flex-col p-3 mx-2"
                                            >
                                                -
                                            </div>
                                        </div>
                                        <div
                                            class="flex flex-row w-full text-md pt-2"
                                        >
                                            <div
                                                class="flex flex-col items-center justify-center"
                                            >
                                                <Childrenicon></Childrenicon>
                                            </div>
                                            <div
                                                v-if="
                                                    list.bill_customer_children !=
                                                    null
                                                "
                                                class="flex flex-col p-3 mx-2"
                                            >
                                                {{
                                                    list.bill_customer_children
                                                }}
                                            </div>
                                            <div
                                                v-if="
                                                    list.bill_customer_children ==
                                                    null
                                                "
                                                class="flex flex-col p-3 mx-2"
                                            >
                                                -
                                            </div>
                                        </div>
                                        <div
                                            class="flex flex-row w-full text-md pt-2"
                                        >
                                            <div
                                                class="flex flex-col items-center justify-center"
                                            >
                                                <Kidicon></Kidicon>
                                            </div>
                                            <div
                                                v-if="
                                                    list.bill_customer_baby !=
                                                    null
                                                "
                                                class="flex flex-col p-3 mx-2"
                                            >
                                                {{ list.bill_customer_baby }}
                                            </div>
                                            <div
                                                v-if="
                                                    list.bill_customer_baby ==
                                                    null
                                                "
                                                class="flex flex-col p-3 mx-2"
                                            >
                                                -
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center flex-wrap mt-5 border-t border-gray-300 pt-5"
                                >
                                    <div
                                        class="flex flex-row w-1/2 items-center"
                                    >
                                        <svg
                                            class="mr-2 mb-1 w-7 h-7"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                            />
                                        </svg>
                                        <label class="">
                                            {{
                                                new Date().toLocaleDateString(
                                                    undefined,
                                                    {
                                                        year: "numeric",
                                                        month: "numeric",
                                                        day: "numeric",
                                                    }
                                                )
                                            }}
                                        </label>
                                    </div>
                                    <div
                                        class="flex flex-row w-1/2items-center"
                                    >
                                        <svg
                                            class="mr-2 mb-1 w-7 h-7"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                            />
                                        </svg>
                                        <label
                                            v-if="
                                                list.bill_registered_at != null
                                            "
                                            class="mt-1"
                                        >
                                            {{
                                                new Date(
                                                    list.bill_registered_at
                                                ).toLocaleTimeString()
                                            }}
                                        </label>
                                        <label
                                            v-if="
                                                list.bill_registered_at == null
                                            "
                                            class="mt-1"
                                            >{{
                                                new Date().toLocaleTimeString()
                                            }}</label
                                        >
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <!-- <div class="flex w-3/12 h-full bg-slate-200 my-5 mx-2 rounded-lg">
                <div
                    class="flex flex-col h-full w-full bg-gray-100 my-5 mx-5 rounded-lg shadow-lg"
                >
                    <label class="text-2xl p-4">สรุปการลงทะเบียนโต๊ะ</label>

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
                                'md:w-auto xl:w-auto md:h-auto xl:h-auto md:my-2 md:mx-3 xl:my-0 border-2 xl:text-base rounded-lg text-center shadow-lg border-slate-200': true,
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
                                            {{ itempm.package_name }} (
                                            {{ itempm.package_price }} บาท )
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
                                            ผู้ใหญ่ {{ item.customer_adult }}
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            เด็กโต {{ item.customer_children }}
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            เด็ก {{ item.customer_baby }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div> -->
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
import Adulticon from "@/components/Adulticon.vue";
import Childrenicon from "@/components/Childrenicon.vue";
import Kidicon from "@/components/Kidicon.vue";

export default {
    components: {
        Sidennav,
        MenuModal,
        Registable,
        ServicetableModal,
        Adulticon,
        Childrenicon,
        Kidicon,
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
                        console.log(this.list_table);
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
