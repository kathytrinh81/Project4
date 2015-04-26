<?php
/**
 * File containing the ezcDocumentRstTableCellNode struct
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Document
 * @version //autogen//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @access private
 */

/**
 * The table cell AST node
 *
 * @package Document
 * @version //autogen//
 * @access private
 */
class ezcDocumentRstTableCellNode extends ezcDocumentRstNode
{
    /**
     * Table cell colspan
     *
     * @var int
     */
    public $colspan = 1;

    /**
     * Table cell rowspan
     *
     * @var int
     */
    public $rowspan = 1;

    /**
     * Construct RST document node
     *
     * @param ezcDocumentRstToken $token
     * @return void
     */
    public function __construct( ezcDocumentRstToken $token )
    {
        // Perhaps check, that only node of type section and metadata are
        // added.
        parent::__construct( $token, self::TABLE_CELL );
    }

    /**
     * Return node content, if available somehow
     *
     * @return string
     */
    protected function content()
    {
        return $this->colspan . ', ' . $this->rowspan;
    }

    /**
     * Set state after var_export
     *
     * @param array $properties
     * @return void
     * @ignore
     */
    public static function __set_state( $properties )
    {
        $node = new ezcDocumentRstTableCellNode(
            $properties['token']
        );

        $node->nodes = $properties['nodes'];

        $node->colspan = $properties['colspan'];
        $node->rowspan = $properties['rowspan'];

        return $node;
    }
}

?>
