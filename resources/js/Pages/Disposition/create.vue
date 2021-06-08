<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  Mise à la Disposition 
            </h2>
        </template>
        <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                     <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Motif :</label>
                            <select
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                id="state"
                                v-model="dispositionData.motif"
                            >
                                <option>
                                    Auprés d'une institution ou d'une administration publique - القيام بالخدمة لدى مؤسسة او إدارة عمومية
                                </option>
                                <option>
                                  Mis à la disposition d'associations nationales - وضع تحت تصرف جمعيات وطنية		

                                </option>
                               
                               
                            </select>
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Type de Mouvement :</label>
                            <select
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                v-model="dispositionData.typeM"
                            >
                                <option>Nouveau - إحالة جديدة </option>
                                <option>Prolongation - تمديد وضع تحت تصرف </option>
                                <option>Réintégration - إعادة الإدماج</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Administration d'Origine :</label>
                            <input
                                required
                                type="text"
                                v-model="dispositionData.source"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Administration d'Accueil :</label>
                            <input
                                required
                                type="text"
                                v-model="dispositionData.focus"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                        

                       
                         <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Numéro d'Acte :</label>
                        <input
                            required
                            type="number"
                            v-model="dispositionData.numberAct"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                      <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de Signature d'Acte :</label>
                        <input
                            required
                            type="date"
                            v-model="dispositionData.dateSignAct"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Durée : </label>

                            <label  class="block text-sm font-medium text-gray-700">Années</label>
                            <select v-model="dispositionData.year">
                                <option v-for="i in 10" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <label  class="block text-sm font-medium text-gray-700">Mois</label>
                            <select v-model="dispositionData.month">
                                <option v-for="i in 12" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <label  class="block text-sm font-medium text-gray-700">Jours</label>

                            <select v-model="dispositionData.day">
                                <option v-for="i in 31" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                        </div>
                   
                   
                  
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date d'Effet d'Acte :</label>
                        <input
                            required
                            type="date"
                            v-model="dispositionData.dateEffe"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de Visa CF :</label>
                        <input
                            required
                            type="date"
                            v-model="dispositionData.dateEffeCF"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Numéro de Visa CF :</label>
                        <input
                            required
                            type="number"
                            v-model="dispositionData.numberCf"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de l’accord du Ministère :</label>
                        <input
                            required
                            type="date"
                            v-model="dispositionData.dateActm"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                      <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">N° de l’accord du Ministère :</label>
                        <input
                            required
                            type="number"
                            v-model="dispositionData.numberActm"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date Réintégration :</label>
                        <input
                            required
                            type="date"
                            v-model="dispositionData.dateRei"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date d’installation :</label>
                        <input
                            required
                            type="date"
                            v-model="dispositionData.dateInstal"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                </div>

                <input
                    required
                    type="hidden"
                    v-model="dispositionData.employee_id"
                />
            </div>

        <button @click="postData()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
            dispositionData: {},
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
        postData() {
            axios
                .post("/api/disposition/store", this.dispositionData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/disposition/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.dispositionData.employee_id = this.employee_id;
    },
};
</script>
