<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Stage
            </h2>
        </template>
        <div>
             <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                        <hr />
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Stage Interne :</label>
                            <select
                                name="intern"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                v-model="stageData.intern"
                            >
                                <option>
                                    لمدة (01) سنة واحدة ( التربص يخص الموظف
                                    المرسم)
                                </option>
                                <option>
                                    لمدة (01) سنة واحدة + تكوين تحضيري (التكوين
                                    تحضيري يخص بعض الرتب كشرط الترسيم)
                                </option>
                                (deux mois) شهرين (neuf mois)تسعة أشهر »
                            </select>
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Objet du Stage:</label>
                            <input
                                required
                                type="text"
                                v-model="stageData.objet"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Date:</label>
                            <input
                                required
                                type="date"
                                v-model="stageData.date"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Durée : </label>

                            <label  class="block text-sm font-medium text-gray-700">Années</label>
                            <select v-model="stageData.year">
                                <option v-for="i in 10" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <label  class="block text-sm font-medium text-gray-700">Mois</label>
                            <select v-model="stageData.month">
                                <option v-for="i in 12" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <label  class="block text-sm font-medium text-gray-700">Jours</label>

                            <select v-model="stageData.day">
                                <option v-for="i in 31" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">établissement:</label>
                            <input
                                required
                                type="text"
                                v-model="stageData.etabili"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                    </div>
                </div>
                <input required type="hidden" v-model="stageData.employee_id" />
            </div>
        <button @click="editStage()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
        </div>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";

import JetActionMessage from "@/Jetstream/ActionMessage";
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal";
import JetDangerButton from "@/Jetstream/DangerButton";
import JetDialogModal from "@/Jetstream/DialogModal";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetSectionBorder from "@/Jetstream/SectionBorder";

export default {
    components: {
         AppLayout,
        JetActionMessage,
        JetActionSection,
        JetButton,
        JetConfirmationModal,
        JetDangerButton,
        JetDialogModal,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
        JetSectionBorder,
        
    },
    data() {
        return {
            stageData: {},
            domaine: [],
        };
    },
    props: ["employee_id"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        editStage() {
            axios
                .post("/api/stage/store", this.stageData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/stage/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.stageData.employee_id = this.employee_id;
    },
};
</script>
