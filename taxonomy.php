<?php

function _create_vocabs() {

  $new_vocabs = array(
    'vocabulary_frequency' => 'Sampling Frequency',
    'vocabulary_license' => 'License',
    'vocabulary_install' => 'Install package',
    );

  foreach ($new_vocabs as $vocab_name => $name) {
    if(!taxonomy_vocabulary_machine_name_load($vocab_name)){
        $vocab = new stdClass();
        $vocab->name = $name;
        $vocab->machine_name = $vocab_name;
        taxonomy_vocabulary_save($vocab);
      } //if
    } //foreach
} //_create_vocabs
