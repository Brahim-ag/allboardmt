<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Parcours Scolaire
      </h2>
    </template>
    <div class="max-w-9xl mx-auto py-10 sm:px-2 lg:px-8">
      <inertia-link
        :href="`/parcour/create/${this.employe_id}`"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
        >Ajouter</inertia-link
      >

      <div
        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
      >
        <table class="table-auto min-w-full divide-y divide-gray-200">
          <tr>
            <th>Niveau d'Etude</th>
            <th>Diplôme</th>
            <th>Domaine et Filière</th>
            <th>Spécialité</th>
            <th>Etablissement d'Enseignement</th>
            <th>Date d'Obtention</th>
          </tr>

          <tr v-for="(parcour, index) in parcours" :key="index">
            <td class="px-2 py-4 whitespace-nowrap">{{ parcour.level }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ parcour.gradution }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ parcour.postbac }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ parcour.spec }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ parcour.whereU }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ parcour.year }}</td>
            <td
              class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded"
            >
              <inertia-link :href="`/parcour/edit/${parcour.id}`">
                modifier
              </inertia-link>
            </td>
          </tr>
        </table>
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
  props: ["employe_id"],
  data() {
    return {
      parcours: [],
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
        .get("/api/parcour/getall/" + this.employe_id)
        .then((response) => {
          this.parcours = response.data;
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
