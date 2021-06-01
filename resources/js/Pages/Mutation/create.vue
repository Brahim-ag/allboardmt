<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mutation
            </h2>
        </template>
        <div>
           
                   <div class="container mx-auto grid grid-cols-4 gap-3">
                  <div class="col-span-6 sm:col-span-2">
                        <div class="form-group">
                            <strong>Adminstration d'Origine :</strong>
                            <input
                                required
                                type="text"
                                name="from"
                                v-model="mutationData.from"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Adminstration d'Acceuil :</strong>
                            <input
                                required
                                type="text"
                                name="to"
                                v-model="mutationData.to"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong
                                >Numéro d'Accord Final du Ministère :</strong
                            >
                            <input
                                required
                                type="text"
                                
                                v-model="mutationData.numberRef"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date d'Accord :</strong>
                            <input
                                required
                                type="date"
                                name="dateRef"
                                v-model="mutationData.dateRef"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Type de Mutation :</strong>
                            <select class="mt-1 block w-full" v-model="mutationData.type">
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
                            <strong>Numéro d'Acte :</strong>
                            <input
                                required
                                type="number"
                                name="Number"
                                v-model="mutationData.Number"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date de Signature d'Acte :</strong>
                            <input
                                required
                                type="date"
                                name="dateSignature"
                                v-model="mutationData.dateSignature"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date d'Effet d'Acte :</strong>
                            <input
                                required
                                type="date"
                                name="dateStart"
                                v-model="mutationData.dateStart"
                                class="mt-1 block w-full"
                            />
                        </div>
                    </div>
                </div>
                <input
                    required
                    type="hidden"
                    v-model="mutationData.employee_id"
                />
            </div>
       

        <button @click="postData()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
            mutationData: {},
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
                .post("/api/mutations/store", this.mutationData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/mutations/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.mutationData.employee_id = this.employee_id;
    },
};
</script>
