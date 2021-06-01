<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifer un employé
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
                <div class="col-span-6 sm:col-span-2">
                    <div class="form-group">
                        <jet-strong>Affaire :</jet-strong>
                        <jet-input
                            required
                            type="text"
                            v-model="antecedData.affaire"
                            class="mt-1 block w-full"
                        />
                    </div>

                    <div class="form-group">
                        <jet-strong>Qualité :</jet-strong>
                        <jet-input
                            required
                            type="text"
                            v-model="antecedData.quality"
                            class="mt-1 block w-full"
                        />
                    </div>

                    <div class="form-group">
                        <jet-strong>Jugement Prononcé :</jet-strong>
                        <jet-input
                            required
                            type="text"
                            v-model="antecedData.jugement"
                            class="mt-1 block w-full"
                        />
                    </div>

                    <div class="form-group">
                        <jet-strong>Instance Judiciaire :</jet-strong>
                        <jet-input
                            required
                            type="text"
                            v-model="antecedData.instance"
                            class="mt-1 block w-full"
                        />
                    </div>

                    <jet-input
                        required
                        type="hidden"
                        v-model="antecedData.employee_id"
                        
                    />
                <button @click="editAntecejudi()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">
            Valider
        </button></div>
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
            antecedData: {},
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
        editAntecejudi() {
            axios
                .post("/api/antecejudi/store", this.antecedData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/antecejudi/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.antecedData.employee_id = this.employee_id;
    },
};
</script>
