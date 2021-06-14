<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modification enfant
            </h2>
        </template>
       <div>
            <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">

                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Nom:</label>
                        <input
                            required
                            type="text"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="childData.name"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Prénom:</label>
                        <input
                            required
                            type="text"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="childData.lastname"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Date de naissance:</label>
                        <input
                            required
                            type="date"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="childData.dataNaiss"
                        />
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Wilaya de naissance:</label>
                        <select
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            
                            v-model="childData.wilayaNaiss"
                        >
                               <option> Adrar</option>
                         <option>Chlef</option>
                        <option>
                            Laghouat</option>
                        <option>
                            Oum El Bouaghi</option>
                        <option>
                            Batna</option>
                        <option>
                            Béjaïa</option>
                        <option>
                            Biskra</option>
                        <option>
                            Béchar</option>
                        <option>
                            Blida</option>
                        <option>
                            Bouira</option>
                        <option>
                            Tamanrasset</option>
                        <option>
                            Tébessa</option>
                        <option>
                            Tlemcen</option>
                        <option>
                            Tiaret</option>
                        <option>
                            Tizi Ouzou</option>
                        <option>
                            Alger</option>
                        <option>
                            Djelfa</option>
                        <option>
                            Jijel</option>
                        <option>
                            Sétif</option>
                        <option>
                            Saïda</option>
                        <option>
                            Skikda</option>
                        <option>
                            Sidi Bel Abbès</option>
                        <option>
                            Annaba</option>
                        <option>
                            Guelma</option>
                        <option>
                            Constantine</option>
                        <option>
                            Médéa</option>
                        <option>
                            Mostaganem</option>
                        <option>
                            M'Sila</option>
                        <option>
                            Mascara</option>
                        <option>
                            Ouargla</option>
                        <option>
                            Oran</option>
                        <option>
                            El Bayadh</option>
                        <option>
                            Illizi</option>
                        <option>
                            Bordj Bou Arreridj</option>
                        <option>
                            Boumerdès</option>
                        <option>
                            El Tarf</option>
                        <option>
                            Tindouf</option>
                        <option>
                            Tissemsilt</option>
                        <option>
                            El Oued</option>
                        <option>
                            Khenchela</option>
                        <option>
                            Souk Ahras</option>
                        <option>
                            Tipaza</option>
                        <option>
                            Mila</option>
                        <option>
                            Aïn Defla</option>
                        <option>
                            Naâma</option>
                        <option>
                            Aïn Témouchent</option>
                        <option>
                            Ghardaïa</option>
                        <option>
                            Relizane</option>


                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Sexe:</label>
                        <select
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            
                            v-model="childData.sexe"
                        >

                         <option value="Masculin">Masculin</option>
                        <option value="Féminin">Féminin</option>


                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Prise en charge:</label>
                        <select
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            
                            v-model="childData.charge"
                        >

                       <option value="1">Oui</option>
                        <option value="0">Non</option>



                        </select>
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Scolarisé:</label>
                        <select
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            
                            v-model="childData.school"
                        >

                       <option value="1">Oui</option>
                        <option value="0">Non</option>



                        </select>
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Cycle scolaire:</label>
                        <input
                            required
                            type="text"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="childData.cycle"
                        />
                    </div>
                <input
                    required
                    type="hidden"
                    name="employee_id"
                    v-model="childData.employee_id"
                />
            </div>
            </div>
        </div>
        <button @click="editchild()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
            childData: this.child,
            domaine: [],
        };
    },
    props: ["child"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        editchild(){
            axios
                .put("/api/child/update/" + this.childData.id, this.childData)

                .then((response) => {
                    if (response.status == 200) {
                        window.location.href = "/child/"+ this.childData.employee_id;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        }
    },
    created() {
        this.domainList();
    },
};
</script>
