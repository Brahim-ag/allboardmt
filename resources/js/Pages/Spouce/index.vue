<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Conjoints 
      </h2>
    </template>
    <div class="max-w-9xl mx-auto py-10 sm:px-2 lg:px-8">
      <div
        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
      >
        <table class="table-auto min-w-full divide-y divide-gray-200">
          <tr>
            <th>Nom et Prénom</th>
            <th>Date de Naissance</th>
            <th>Date de mariage</th>
            <th>Date de divorce</th>
            <th>Date de décès</th>

          </tr>

          <tr v-for="(spouce, index) in spouces" :key="index">
            <td class="px-2 py-4 whitespace-nowrap text-sm" >{{ spouce.name  }} {{ spouce.lastname   }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ spouce.dataNaiss  }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ spouce.dataMariage  }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ spouce.dataDevorce  }}</td>
            <td class="px-2 py-4 whitespace-nowrap">{{ spouce.dataDeath   }}</td>


            <td
              class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded"
            >
              <inertia-link :href="`/spouce/edit/${spouce.id}`">
                Modifier
              </inertia-link>
            </td>
          </tr>
        </table>
      </div>
      <inertia-link
        :href="`/spouce/create/${this.employe_id}`"
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
      spouces: [],
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
        .get("/api/spouce/getall/" + this.employe_id)
        .then((response) => {
          this.spouces = response.data;
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
