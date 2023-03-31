import './MultiCheck.css';
import React, { FC } from 'react';

type Props = {
  label: string,
  children?: React.ReactNode
}

export const MultiCheckWrap: FC<Props> = ({label, children }) => {
  return <div className="MultiCheck">
    <div className="MultiCheck_Status">{label || 'Status'}</div>
    <div className='MultiCheck_Box'>
      <div className="MultiCheck_Body">
        {children}
      </div>
    </div>
  </div>
}
