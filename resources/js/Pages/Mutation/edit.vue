<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mise en disponibilité
            </h2>
        </template>
            <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Adminstration d'Origine :</label>
                            <input
                                required
                                type="text"
                                name="from"
                                v-model="mutationData.from"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Adminstration d'Acceuil :</label>
                            <input
                                required
                                type="text"
                                name="to"
                                v-model="mutationData.to"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">
                                >Numéro d'Accord Final du Ministère </label>
                            <input
                                required
                                type="text"
                                
                                v-model="mutationData.numberRef"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Date d'Accord :</label>
                            <input
                                required
                                type="date"
                                name="dateRef"
                                v-model="mutationData.dateRef"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Type de Mutation :</label>
                            <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="mutationData.type">
                                <option>
                                    Caractère Général et Périodique - ذات طابع
                                    عام ودوري
                                </option>
                                <option>
                                    Caractère Limité et Ponctuel - ذات طابع
                                    محدود وظرف
                                </option>
                                <option>
                                    Mutation à la Demande -  نقل الموظف بطلب منه
                                </option>
                                <option>
                                    Mutation d'Office -نقل الموظف إجباريا
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Numéro d'Acte :</label>
                            <input
                                required
                                type="number"
                                name="Number"
                                v-model="mutationData.Number"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Date de Signature d'Acte :</label>
                            <input
                                required
                                type="date"
                                name="dateSignature"
                                v-model="mutationData.dateSignature"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Date d'Effet d'Acte :</label>
                            <input
                                required
                                type="date"
                                name="dateStart"
                                v-model="mutationData.dateStart"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                    </div>
                    </div>
                    
        <button @click="postData()" class="btn btn-primary">Valider</button>
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
            mutationData: this.Mutation,
            domaine: [],
        };
    },
    props: ["Mutation"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .put("/api/mutations/update/" + this.mutationData.id, this.mutationData)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/mutations/" + this.mutationData.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
    },
};
</script>
