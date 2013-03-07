<?php

namespace Acme\Bundle\DemoGridBundle\Datagrid;

use Oro\Bundle\GridBundle\Datagrid\DatagridManager;
use Oro\Bundle\GridBundle\Field\FieldDescription;
use Oro\Bundle\GridBundle\Field\FieldDescriptionCollection;
use Oro\Bundle\GridBundle\Field\FieldDescriptionInterface;
use Oro\Bundle\GridBundle\Filter\FilterInterface;

class ProductDatagridManager extends DatagridManager
{
    /**
     * @var FieldDescriptionCollection
     */
    protected $fieldsCollection;

    /**
     * @return FieldDescriptionCollection
     */
    protected function getFieldDescriptionCollection()
    {
        if (!$this->fieldsCollection) {
            $this->fieldsCollection = new FieldDescriptionCollection();

            $fieldManufacturerId = new FieldDescription();
            $fieldManufacturerId->setName('m_id');
            $fieldManufacturerId->setOptions(
                array(
                    'type'         => FieldDescriptionInterface::TYPE_INTEGER,
                    'label'        => 'Manufacturer ID',
                    'field_type'   => FieldDescriptionInterface::TYPE_INTEGER,
                    'entity_alias' => 'm',
                    'field_name'   => 'id',
                    'filter_type'  => FilterInterface::TYPE_NUMBER,
                    'required'     => false,
                    'sortable'     => true,
                    'filterable'   => true,
                    'show_filter'  => true,
                )
            );
            $this->fieldsCollection->add($fieldManufacturerId);

            $fieldManufacturerName = new FieldDescription();
            $fieldManufacturerName->setName('m_name');
            $fieldManufacturerName->setOptions(
                array(
                    'type'        => FieldDescriptionInterface::TYPE_TEXT,
                    'label'        => 'Manufacturer name',
                    'field_type'   => FieldDescriptionInterface::TYPE_TEXT,
                    'entity_alias' => 'm',
                    'field_name'   => 'name',
                    'filter_type'  => FilterInterface::TYPE_STRING,
                    'required'     => false,
                    'sortable'     => true,
                    'filterable'   => true,
                    'show_filter'  => true,
                )
            );
            $this->fieldsCollection->add($fieldManufacturerName);

            $fieldManufacturerId = new FieldDescription();
            $fieldManufacturerId->setName('product_count');
            $fieldManufacturerId->setOptions(
                array(
                    'type'         => FieldDescriptionInterface::TYPE_INTEGER,
                    'label'        => 'Number of products',
                    'field_type'   => FieldDescriptionInterface::TYPE_INTEGER,
                    'field_name'   => 'COUNT(p.id)',
                    'filter_type'  => FilterInterface::TYPE_NUMBER,
                    'required'     => false,
                    'sortable'     => true,
                    'filterable'   => true,
                    'show_filter'  => true,
                    'complex_data' => true
                )
            );
            $this->fieldsCollection->add($fieldManufacturerId);

            $fieldId = new FieldDescription();
            $fieldId->setName('id');
            $fieldId->setOptions(
                array(
                    'type'        => FieldDescriptionInterface::TYPE_INTEGER,
                    'label'       => 'Product ID',
                    'field_type'  => FieldDescriptionInterface::TYPE_INTEGER,
                    'entity_alias' => 'p',
                    'field_name'  => 'id',
                    'filter_type' => FilterInterface::TYPE_NUMBER,
                    'required'    => false,
                    'sortable'    => true,
                    'filterable'  => true,
                    'show_filter' => true,
                )
            );
            $this->fieldsCollection->add($fieldId);

            $fieldName = new FieldDescription();
            $fieldName->setName('name');
            $fieldName->setOptions(
                array(
                    'type'        => FieldDescriptionInterface::TYPE_TEXT,
                    'label'       => 'Name',
                    'field_type'  => FieldDescriptionInterface::TYPE_TEXT,
                    'entity_alias' => 'p',
                    'field_name'  => 'name',
                    'filter_type' => FilterInterface::TYPE_STRING,
                    'required'    => false,
                    'sortable'    => true,
                    'filterable'  => true,
                    'show_filter' => true,
                )
            );
            $this->fieldsCollection->add($fieldName);

            $fieldPrice = new FieldDescription();
            $fieldPrice->setName('price');
            $fieldPrice->setOptions(
                array(
                    'type'        => FieldDescriptionInterface::TYPE_DECIMAL,
                    'label'       => 'Price',
                    'field_type'  => FieldDescriptionInterface::TYPE_INTEGER,
                    'entity_alias' => 'p',
                    'field_name'  => 'price',
                    'filter_type' => FilterInterface::TYPE_NUMBER,
                    'required'    => false,
                    'sortable'    => true,
                    'filterable'  => true,
                    'show_filter' => true,
                )
            );
            $this->fieldsCollection->add($fieldPrice);

            $fieldCount = new FieldDescription();
            $fieldCount->setName('count');
            $fieldCount->setOptions(
                array(
                    'type'        => FieldDescriptionInterface::TYPE_INTEGER,
                    'label'       => 'Count',
                    'field_type'  => FieldDescriptionInterface::TYPE_INTEGER,
                    'entity_alias' => 'p',
                    'field_name'  => 'count',
                    'filter_type' => FilterInterface::TYPE_NUMBER,
                    'required'    => false,
                    'sortable'    => true,
                    'filterable'  => true,
                    'show_filter' => true,
                )
            );
            $this->fieldsCollection->add($fieldCount);

            $fieldDescription = new FieldDescription();
            $fieldDescription->setName('description');
            $fieldDescription->setOptions(
                array(
                    'type'        => FieldDescriptionInterface::TYPE_TEXT,
                    'label'       => 'Description',
                    'field_type'  => FieldDescriptionInterface::TYPE_TEXT,
                    'entity_alias' => 'p',
                    'field_name'  => 'description',
                    'filter_type' => FilterInterface::TYPE_STRING,
                    'required'    => false,
                    'sortable'    => true,
                    'filterable'  => true,
                    'show_filter' => true,
                )
            );
            $this->fieldsCollection->add($fieldDescription);

//            $fieldCreateDate = new FieldDescription();
//            $fieldCreateDate->setName('createDate');
//            $fieldCreateDate->setOptions(
//                array(
//                    'type'        => FieldDescriptionInterface::TYPE_DATETIME,
//                    'label'       => 'Create Date',
//                    'field_type'  => FieldDescriptionInterface::TYPE_DATETIME,
//                    'entity_alias' => 'p',
//                    'field_name'  => 'createDate',
//                    'filter_type' => FilterInterface::TYPE_DATETIME,
//                    'required'    => false,
//                    'sortable'    => true,
//                    'filterable'  => true,
//                    'show_filter' => true,
//                )
//            );
//            $this->fieldsCollection->add($fieldCreateDate);
        }

        return $this->fieldsCollection;
    }

    /**
     * {@inheritdoc}
     */
    protected function getListFields()
    {
        return $this->getFieldDescriptionCollection()->getElements();
    }

    /**
     * {@inheritdoc}
     */
    protected function getSorters()
    {
        $fields = array();
        /** @var $fieldDescription FieldDescription */
        foreach ($this->getFieldDescriptionCollection() as $fieldDescription) {
            if ($fieldDescription->getOption('sortable')) {
                $fields[] = $fieldDescription;
            }
        }

        return $fields;
    }

    /**
     * {@inheritdoc}
     */
    protected function getFilters()
    {
        $fields = array();
        /** @var $fieldDescription FieldDescription */
        foreach ($this->getFieldDescriptionCollection() as $fieldDescription) {
            if ($fieldDescription->getOption('filterable')) {
                $fields[] = $fieldDescription;
            }
        }

        return $fields;
    }
}
