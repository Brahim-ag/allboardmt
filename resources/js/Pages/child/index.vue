<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Enfants
      </h2>
    </template>
    <div class="max-w-9xl mx-auto py-10 sm:px-2 lg:px-8">
      <div
        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
      >
        <table class="table-auto min-w-full divide-y divide-gray-200">
          <tr>
            <th>Nom et Prénom</th>
            <th>Sexe</th>
            <th>Date de Naissance</th>
            <th>Wilaya de Naissance</th>
            <th>Charge</th>
            <th>Scolarisé</th>
            <th>Cycle Scolaire </th>

          </tr>

          <tr v-for="(child, index) in childs" :key="index">
            <td class="px-2 py-4 whitespace-nowrap text-sm" >{{ child.name  }} {{ child.lastname   }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ child.sexe  }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ child.dataNaiss  }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ child.wilayaNaiss  }}</td>
            <td class="px-2 py-4 whitespace-nowrap" v-if="child.charge === 1">Oui</td>
            <td class="px-2 py-4 whitespace-nowrap" v-if="child.charge === 0">Non</td>
            <td class="px-2 py-4 whitespace-nowrap" v-if="child.school === 0">Non</td>
            <td class="px-2 py-4 whitespace-nowrap" v-if="child.school  === 1">Oui</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ child.cycle   }}</td>


            <td
              class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded"
            >
              <inertia-link :href="`/child/edit/${child.id}`">
                Modifier
              </inertia-link>
            </td>
          </tr>
        </table>
      </div>
      <inertia-link
        :href="`/child/create/${this.employe_id}`"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
        >Ajouter</inertia-link>
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
  props: ["employe_id"],
  data() {
    return {
      childs: [],
    };
  },
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
  methods: {
    getAll() {
      axios
        .get("/api/child/getall/" + this.employe_id)
        .then((response) => {
          this.childs = response.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getAll();
  },
};
</script>
