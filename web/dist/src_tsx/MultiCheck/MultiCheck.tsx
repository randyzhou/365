import './MultiCheck.css';
import React, {useEffect, FC, useState} from 'react';
import {MultiCheckWrap} from './MultiCheckWrap';

export type Option = {
  label: string,
  value: string
}

/**
 * Notice:
 * 1. There should be a special `Select All` option with checkbox to control all passing options
 * 2. If columns > 1, the options should be placed from top to bottom in each column
 *
 * @param {string} label - the label text of this component
 * @param {Option[]} options - options. Assume no duplicated labels or values
 * @param {string[]} values - If `undefined`, makes the component in uncontrolled mode with no options checked;
 *                            if not undefined, makes the component to controlled mode with corresponding options checked.
 *                            The values CAN be duplicated or NOT in the provided options
 * @param {number} columns - default value is 1. If it's bigger than all options count, make it same as the count of all options 
 * @param {Function} onChange - if not undefined, when checked options are changed, they should be passed to outside;
 *                              if undefined, the options can still be selected, but won't notify the outside
 * @param {Function} onRender - will be called if current component rendered. Determine the balance between a reasonable
 *                              render count and readable code
 */
export type Props = {
  label?: string,
  options: Option[],
  columns?: number,
  values?: string[]
  onChange?: (options: Option[]) => void,
  onRender: () => void
}



const multiColumnsOptions1 = (options: Option[], columns: number): Option[][] => {
  // Add the select all options to the given options array.
  let optionsAll: Option[] = [{ label: "Select All", value: "all" }].concat(options);
  let optionsCount = optionsAll.length;
  if (columns > optionsCount) columns = optionsCount;
  if (columns < 1) columns = 1;


  // Get (at least) options of a column  
  let columnOptions = Math.trunc(optionsCount / columns);
  // Get columns to plus 1
  let columnMods = optionsCount % columns;
  
  
  
  let optionsTemp: Option[] = [];
  // A multidimensional array of options to return
  let optionsReturn: Option[][] = [];
  let page = 1;

  optionsAll.map((item: Option, index: number) => {
    optionsTemp.push(item);
    // columnOptions + 1 when page is less than columnMods
    if (page <= columnMods) {
      let indexMod = index + 1;
      let columnElementsMod = page * (columnOptions + 1);
      // if the index to the columnElementsMod, page to the next
      if (indexMod === columnElementsMod) {
        optionsReturn.push(optionsTemp);
        optionsTemp = [];
        page++;
      }
    // Process the left column options  
    } else {
      let indexLeft = index + 1;
      let columnLeft = columnMods + page * columnOptions;
      if ((indexLeft == columnLeft) || index + 1 == optionsCount) {
        optionsReturn.push(optionsTemp);
        optionsTemp = [];
        page++;
      }
    }
  })

  return optionsReturn;
}

/**
 * Revert the options array to multidimensional array of column options.
 * 
 * @param {Option[]} options An array that is raw options.
 * @param {number} columns Columns to devide the options array.
 * @returns {Option[][]} An new multidimensional array representing the multi columns options.
 */
const multiColumnsOptions = (options: Option[], columns: number): Option[][] => {
  // Add the select all options to the given options array.
  let optionsAll: Option[] = [{ label: "Select All", value: "all" }].concat(options);
  let optionsCount = optionsAll.length;
  if (columns > optionsCount) columns = optionsCount;
  if (columns < 1) columns = 1;
  // Get (at least) options of a column  
  let columnOptions = Math.trunc(optionsCount / columns);
  // Get columns to plus 1
  let columnMods = optionsCount % columns;
  let optionsTemp: Option[] = [];
  // A multidimensional array of options to return
  let optionsReturn: Option[][] = [];
  let page = 1;

  optionsAll.map((item: Option, index: number) => {
    optionsTemp.push(item);
    // columnOptions + 1 when page is less than columnMods
    if (page <= columnMods) {
      let indexMod = index + 1;
      let columnElementsMod = page * (columnOptions + 1);
      // if the index to the columnElementsMod, page to the next
      if (indexMod === columnElementsMod) {
        optionsReturn.push(optionsTemp);
        optionsTemp = [];
        page++;
      }
    // Process the left column options  
    } else {
      let indexLeft = index + 1;
      let columnLeft = columnMods + page * columnOptions;
      if ((indexLeft == columnLeft) || index + 1 == optionsCount) {
        optionsReturn.push(optionsTemp);
        optionsTemp = [];
        page++;
      }
    }
  })

  return optionsReturn;
}

export const MultiCheck: FC<Props> = React.memo(({label,options,columns=1,values,onChange,onRender}) => {
  const [selectedAll, setSelectAll] = useState(false);
  const [checkValues, setCheckValues] = useState<string[]>([]);
  const [optionsMultiSortied, setOptionsMultiSortied] = useState<Option[][]>([])

  useEffect(() => {
      setOptionsMultiSortied(multiColumnsOptions(options, columns))
  },[options,columns])

  // eslint-disable-next-line no-lone-blocks
  {
    // NOTE Don't modify the code block, it can be considered as a performance hint,
    //      you need to find a way to avoid triggering it infinitely
    console.log('### > MultiCheck');
    useEffect(() => {
      onRender()
    })
  }

  /**
   * Checked change to pass the value outside the component to the parent component 
   * 
   * @param {string} valueChecked 
   */
  const checkedChange2Outside = (valueChecked: string) => {
    let valuesSelected = [...values || []];
    let optionsSelected: Option[] = [];

    if (valueChecked == 'all') {
      if (selectedAll) {
        optionsSelected = [];
        setSelectAll(false);
      } else {
        optionsSelected = [...options];
        setSelectAll(true);
      }
    } else {
      valuesSelected.indexOf(valueChecked) > -1 ? valuesSelected.splice(valuesSelected.indexOf(valueChecked), 1) : valuesSelected.push(valueChecked);
      !!valuesSelected && valuesSelected.map((value, indexValueTemp) => {
        options.map((item, indexOption) => {
          if (item.value == value)
            optionsSelected.push({'label':item.label,'value':item.value})
        })
      })
    }
    
    optionsSelected.length >= options.length ? setSelectAll(true) : setSelectAll(false)
    !!onChange && onChange(optionsSelected);
  }

  /**
   * Checked change to keep the value as state inside the component
   * 
   * @param {string} valueChecked 
   */
  const checkedChange2Inside = (valueChecked: string) => {
    let valuesSelected: string[] = [...checkValues];
    if (valueChecked == 'all') {
      if (selectedAll) {
        valuesSelected = [];
        setSelectAll(false);
      } else {
        options.map((item, indexOption) => {
          valuesSelected.push(item.value);
        })
        setSelectAll(true);
      }
    } else {
      valuesSelected.indexOf(valueChecked) > -1 ? valuesSelected.splice(valuesSelected.indexOf(valueChecked), 1) : valuesSelected.push(valueChecked);
    }
    
    valuesSelected.length >= options.length ? setSelectAll(true) : setSelectAll(false)
    setCheckValues(valuesSelected);
  }

  const checkedChange = (option: Option) => {
    let valueChecked = option.value;
    if (!!values) checkedChange2Outside(valueChecked);
    else checkedChange2Inside(valueChecked);
  }

  return <MultiCheckWrap label={label || "Status"}>
    {optionsMultiSortied.map((item: Option[], indexNew: number) =>
      <div className="MultiCheck_Columns" key={indexNew} data-testid="MultiCheck_Columns">
        {item.length > 1 ?
          item.map((item1: Option, index1: number) =>
            <div key={index1}>
              <input
                className="MultiCheck_Input"
                type="checkbox"
                value={item1.value}
                checked={item1.value == 'all' ? selectedAll : !!values ? values.indexOf(item1.value) >= 0 : !!checkValues && checkValues.indexOf(item1.value) >= 0} onChange={(e) => checkedChange(item1)} />
              {item1.label}
            </div>
          )
        :
          <div>
            <input
              className="MultiCheck_Input"
              type="checkbox" value={item[0].value}
              checked={item[0].value == 'all' ? selectedAll : !!values ? values.indexOf(item[0].value) >= 0 : !!checkValues && checkValues.indexOf(item[0].value) >= 0} onChange={(e) => checkedChange(item[0])} />
            {item[0].label}
          </div>
        }
      </div>  
    )}
  </MultiCheckWrap>

})

