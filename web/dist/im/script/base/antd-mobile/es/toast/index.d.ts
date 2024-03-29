import React from 'react';
declare const _default: {
    SHORT: number;
    LONG: number;
    show(content: React.ReactNode, duration?: number | undefined, mask?: boolean | undefined): void;
    info(content: React.ReactNode, duration?: number | undefined, onClose?: (() => void) | undefined, mask?: boolean | undefined): void;
    success(content: React.ReactNode, duration?: number | undefined, onClose?: (() => void) | undefined, mask?: boolean | undefined): void;
    fail(content: React.ReactNode, duration?: number | undefined, onClose?: (() => void) | undefined, mask?: boolean | undefined): void;
    offline(content: React.ReactNode, duration?: number | undefined, onClose?: (() => void) | undefined, mask?: boolean | undefined): void;
    loading(content: React.ReactNode, duration?: number | undefined, onClose?: (() => void) | undefined, mask?: boolean | undefined): void;
    hide(): void;
};
export default _default;
