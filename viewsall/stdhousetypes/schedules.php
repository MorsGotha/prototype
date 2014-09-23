<div class="col-xs-12 pull-left">

<div class="panel panel-default">
  <div class="panel-heading">Welcome to Davidsons Application Prototype - Add and edit scheduling documents to a plot here</div>
  <div class="panel-body">
      
      <div id="myTreeView"></div>
      
  </div>
</div>

</div>

<script>
YUI().use(
  'aui-tree-view',
  function(Y) {
    new Y.TreeViewDD(
      {
        boundingBox: '#myTreeView',
        children: [
            {
              children: [
                {
                  children: [
                    {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH301V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH301V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH301V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: false
                            },
                            {
                                children: [
                                    {label: 'JL DH301V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH301V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH301V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH301V', expanded: false
                    },
                                        {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH301V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH301V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH301V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: false
                            },
                            {
                                children: [
                                    {label: 'JL DH301V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH301V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH301V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH309V', expanded: false
                    },
                                        {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH301V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH301V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH301V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: false
                            },
                            {
                                children: [
                                    {label: 'JL DH301V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH301V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH301V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH339V', expanded: false
                    },
                  ],
                  expanded: false,
                  label: '4 Bedrooms'
                },
                {
                  children: [
                    {   
                        children: [
                            {
                                children: [
                                    {label: '<a href="#">Kitchen DH401V-A.pdf</a> &pound;<input value="1000.00" />', leaf: true, type: 'check'},
                                    {label: '<a href="#">Kitchen DH401V-B.pdf</a> &pound;<input value="1100.00" />', leaf: true, type: 'check'},
                                    {label: '<a href="#">Kitchen DH401V-C.pdf</a> &pound;<input value="1150.00" />', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: true
                            },
                            {
                                children: [
                                    {label: 'JL DH401V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH401V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH401V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH401V', expanded: true
                    },
                                        {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH401V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH401V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH401V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: false
                            },
                            {
                                children: [
                                    {label: 'JL DH401V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH401V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH401V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH409V', expanded: false
                    },
                                        {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH401V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH401V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH401V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: false
                            },
                            {
                                children: [
                                    {label: 'JL DH401V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH401V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH401V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH439V', expanded: false
                    },
                  ],
                  expanded: true,
                  label: '4 Bedrooms'
                },
                {
                  children: [
                    {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH501V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH501V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH501V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: true
                            },
                            {
                                children: [
                                    {label: 'JL DH501V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH501V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH501V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH501V', expanded: true
                    },
                                        {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH501V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH501V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH501V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: false
                            },
                            {
                                children: [
                                    {label: 'JL DH501V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH501V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH501V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH509V', expanded: false
                    },
                                        {   
                        children: [
                            {
                                children: [
                                    {label: 'Kitchen DH501V-A.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH501V-B.pdf', leaf: true, type: 'check'},
                                    {label: 'Kitchen DH501V-C.pdf', leaf: true, type: 'check'},
                                ],
                                label: 'Kitchens', expanded: false
                            },
                            {
                                children: [
                                    {label: 'JL DH501V-A.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH501V-B.cad', leaf: true, type: 'check'},
                                    {label: 'JL DH501V-C.cad', leaf: true, type: 'check'},
                                ],
                                label: 'Joist Layouts', expanded: false
                            },
                        ],
                        label: 'DH539V', expanded: false
                    },
                  ],
                  expanded: false,
                  label: '5 Bedrooms',
                }
              ],
              expanded: true,
              label: 'Houses,'
            },
            {
              children: [
                {label: 'Watermelon', leaf: true, type: 'task'},
                {label: 'Apricot', leaf: true, type: 'task'},
                {label: 'Pineapple', leaf: true,  type: 'task'},
                {label: 'Kiwi', leaf: true, type: 'task'},
                {label: 'Orange', leaf: true, type: 'task'},
                {label: 'Pomegranate', leaf: true,  type: 'task'}
              ],
              expanded: false,
              label: 'Flats',
            }
          ]
      }
    ).render();
  }
);
</script>